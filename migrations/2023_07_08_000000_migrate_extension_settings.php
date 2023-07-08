<?php

use Illuminate\Database\Schema\Builder;

return [
    'up' => function (Builder $schema) {
        $db = $schema->getConnection();

        $newExists = $db->table('settings')->where(['key' => 'flarum-lang-spanish.variant'])->exists();
        if ($newExists) {
            $db->table('settings')->where(['key' => 'flarumes.mode'])->delete();
            return;
        }

        $db->table('settings')
            ->where('key', 'flarumes.mode')
            ->update(['key' => 'flarum-lang-spanish.variant']);
        $db->table('settings')
            ->where([
                'key' => 'flarum-lang-spanish.variant',
                'value' => 'es-ES-informal',
            ])
            ->update(['value' => 'informal']);
        $db->table('settings')
            ->where([
                'key' => 'flarum-lang-spanish.variant',
                'value' => 'es-ES-formal',
            ])
            ->update(['value' => 'formal']);
    },
    'down' => function (Builder $schema) {
        $db = $schema->getConnection();

        $newExists = $db->table('settings')->where(['key' => 'flarumes.mode'])->exists();
        if ($newExists) {
            $db->table('settings')->where(['key' => 'flarum-lang-spanish.variant'])->delete();
            return;
        }

        $db->table('settings')
            ->where([
                'key' => 'flarum-lang-spanish.variant',
                'value' => 'formal',
            ])
            ->update(['value' => 'es-ES-formal']);
        $db->table('settings')
            ->where([
                'key' => 'flarum-lang-spanish.variant',
                'value' => 'informal',
            ])
            ->update(['value' => 'es-ES-informal']);
        $db->table('settings')
            ->where('key', 'flarum-lang-spanish.variant')
            ->update(['key' => 'flarumes.mode']);
    },
];
