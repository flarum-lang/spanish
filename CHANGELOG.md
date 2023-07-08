CHANGELOG
=========


1.8.0 (2023-07-08)
------------------

Refactor code for handling formal/informal language variants.


All changes: [1.7.0...1.8.0](https://github.com/flarum-lang/spanish/compare/1.7.0...1.8.0).


1.8.0 (XXXX-XX-XX)
------------------

**General changes**:

* Updated Day.js translations.
* Updated Flarum core translations.
* Updated validation translations.


**Added support for new extensions**:

* [`acpl/flarum-lscache`](https://github.com/android-com-pl/flarum-lscache)
* [`acpl/mobile-tab`](https://github.com/android-com-pl/mobile-tab)
* [`acpl/my-tags`](https://github.com/android-com-pl/my-tags)
* [`afrux/asirem`](https://github.com/afrux/asirem)
* [`afrux/forum-stats-widget`](https://github.com/afrux/forum-stats-widget)
* [`afrux/forum-widgets-core`](https://github.com/afrux/forum-widgets-core)
* [`afrux/news-widget`](https://github.com/afrux/news-widget)
* [`afrux/online-users-widget`](https://github.com/afrux/online-users-widget)
* [`afrux/top-posters-widget`](https://github.com/afrux/top-posters-widget)
* [`amaurycarrade/flarum-ext-syndication`](https://github.com/AmauryCarrade/flarum-ext-syndication)
* [`antoinefr/flarum-ext-money`](https://github.com/AntoineFr/flarum-ext-money)
* [`antoinefr/flarum-ext-online`](https://github.com/AntoineFr/flarum-ext-online)
* [`askvortsov/flarum-auto-moderator`](https://github.com/askvortsov1/flarum-auto-moderator)
* [`askvortsov/flarum-categories`](https://github.com/askvortsov1/flarum-categories)
* [`askvortsov/flarum-checklist`](https://github.com/askvortsov1/flarum-checklist)
* [`askvortsov/flarum-discussion-templates`](https://github.com/askvortsov1/flarum-discussion-templates)
* [`askvortsov/flarum-help-tags`](https://github.com/askvortsov1/flarum-help-tags)
* [`askvortsov/flarum-markdown-tables`](https://github.com/askvortsov1/flarum-markdown-tables)
* [`askvortsov/flarum-moderator-warnings`](https://github.com/askvortsov1/flarum-moderator-warnings)
* [`askvortsov/flarum-pwa`](https://github.com/askvortsov1/flarum-pwa)
* [`askvortsov/flarum-rich-text`](https://github.com/askvortsov1/flarum-rich-text)
* [`askvortsov/flarum-saml`](https://github.com/askvortsov1/flarum-saml)
* [`blomstra/payments`](https://extiverse.com/extension/blomstra/payments)
* [`blomstra/readme`](https://extiverse.com/extension/blomstra/readme)
* [`clarkwinkelmann/flarum-ext-author-change`](https://github.com/clarkwinkelmann/flarum-ext-author-change)
* [`clarkwinkelmann/flarum-ext-emojionearea`](https://github.com/clarkwinkelmann/flarum-ext-emojionearea)
* [`clarkwinkelmann/flarum-ext-first-post-approval`](https://github.com/clarkwinkelmann/flarum-ext-first-post-approval)
* [`clarkwinkelmann/flarum-ext-group-list`](https://github.com/clarkwinkelmann/flarum-ext-group-list)
* [`clarkwinkelmann/flarum-ext-post-stream-search`](https://github.com/clarkwinkelmann/flarum-ext-post-stream-search)
* [`clarkwinkelmann/flarum-ext-predefined-avatars`](https://github.com/clarkwinkelmann/flarum-ext-predefined-avatars)
* [`dem13n/topic-starter-label`](https://github.com/Dem13n/topic-starter-label)
* [`flarum/akismet`](https://github.com/flarum/akismet)
* [`flarum/approval`](https://github.com/flarum/approval)
* [`flarum/bbcode`](https://github.com/flarum/bbcode)
* [`flarum/emoji`](https://github.com/flarum/emoji)
* [`flarum/flags`](https://github.com/flarum/flags)
* [`flarum/likes`](https://github.com/flarum/likes)
* [`flarum/lock`](https://github.com/flarum/lock)
* [`flarum/markdown`](https://github.com/flarum/markdown)
* [`flarum/mentions`](https://github.com/flarum/mentions)
* `flarum-profile-views`
* [`flarum/pusher`](https://github.com/flarum/pusher)
* [`flarum/statistics`](https://github.com/flarum/statistics)
* [`flarum/sticky`](https://github.com/flarum/sticky)
* [`flarum/subscriptions`](https://github.com/flarum/subscriptions)
* [`flarum/suspend`](https://github.com/flarum/suspend)
* [`flarum/tags`](https://github.com/flarum/tags)
* [`flarumite/simple-spoilers`](https://github.com/flarumite/simple-spoilers)
* [`fof/best-answer`](https://github.com/FriendsOfFlarum/best-answer)
* [`fof/discussion-language`](https://github.com/FriendsOfFlarum/discussion-language)
* [`fof/disposable-emails`](https://github.com/FriendsOfFlarum/disposable-emails)
* [`fof/follow-tags`](https://github.com/FriendsOfFlarum/follow-tags)
* [`fof/forum-statistics-widget`](https://github.com/FriendsOfFlarum/forum-statistics-widget)
* [`fof/links`](https://github.com/FriendsOfFlarum/links)
* [`fof/masquerade`](https://github.com/FriendsOfFlarum/masquerade)
* [`fof/nightmode`](https://github.com/FriendsOfFlarum/nightmode)
* [`fof/oauth`](https://github.com/FriendsOfFlarum/oauth)
* [`fof/pages`](https://github.com/FriendsOfFlarum/pages)
* [`fof/polls`](https://github.com/FriendsOfFlarum/polls)
* [`fof/reactions`](https://github.com/FriendsOfFlarum/reactions)
* [`fof/recaptcha`](https://github.com/FriendsOfFlarum/recaptcha)
* [`fof/share-social`](https://github.com/FriendsOfFlarum/share-social)
* [`fof/socialprofile`](https://github.com/FriendsOfFlarum/socialprofile)
* [`fof/spamblock`](https://github.com/FriendsOfFlarum/spamblock)
* [`fof/terms`](https://github.com/FriendsOfFlarum/terms)
* [`fof/upload`](https://github.com/FriendsOfFlarum/upload)
* [`fof/user-bio`](https://github.com/FriendsOfFlarum/user-bio)
* [`fof/user-directory`](https://github.com/FriendsOfFlarum/user-directory)
* [`fof/webhooks`](https://github.com/FriendsOfFlarum/webhooks)
* [`glowingblue/password-strength`](https://github.com/glowingblue/flarum-ext-password-strength)
* [`glowingblue/redis-setup`](https://github.com/glowingblue/flarum-ext-redis-setup)
* [`ianm/html-head`](https://github.com/imorland/html-head)
* [`ianm/level-ranks`](https://github.com/imorland/level-ranks)
* [`ianm/synopsis`](https://github.com/imorland/synopsis)
* [`justoverclock/related-discussions`](https://extiverse.com/extension/justoverclock/related-discussions)
* [`justoverclock/flarum-ext-welcomebox`](https://github.com/justoverclockl/flarum-ext-welcomebox)
* [`katosdev/signature`](https://github.com/katosdev/signature)
* [`kilowhat/flarum-ext-audit-free`](https://github.com/kilowhat/flarum-ext-audit-free)
* [`kyrne/shout`](https://github.com/KyrneDev/Shout-public)
* [`kyrne/whisper`](https://github.com/KyrneDev/whisper)
* [`matteocontrini/flarum-imgur-upload`](https://github.com/matteocontrini/flarum-imgur-upload)
* [`michaelbelgium/flarum-discussion-views`](https://github.com/MichaelBelgium/flarum-discussion-views)
* [`serakoi/flarumdiscordtheme`](https://github.com/Serakoi/flarum-discord-theme-2)
* [`sycho/flarum-move-posts`](https://github.com/SychO9/flarum-move-posts)
* [`sycho/flarum-profile-cover`](https://github.com/SychO9/flarum-profile-cover)
* [`the-turk/flarum-nodp`](https://github.com/the-turk/flarum-nodp)
* [`the-turk/flarum-pallet-theme`](https://github.com/the-turk/flarum-pallet-theme)
* [`the-turk/flarum-stickiest`](https://github.com/the-turk/flarum-stickiest)
* [`v17development/flarum-blog`](https://github.com/v17development/flarum-blog)
* [`v17development/flarum-seo`](https://github.com/v17development/flarum-seo)
* [`v17development/flarum-support`](https://extiverse.com/extension/v17development/flarum-support)
* [`v17development/flarum-user-badges`](https://github.com/v17development/flarum-user-badges)
* [`ziiven/flarum-money-leaderboard`](https://github.com/Ziiven/flarum-money-leaderboard)
* [`flarum/nicknames`](https://github.com/flarum/nicknames)


All changes: [1.7.0...1.8.0](https://github.com/flarum-lang/spanish/compare/1.7.0...1.8.0).


1.7.0 (2023-06-01)
------------------

**General changes**:

* Updated Flarum core translations.


**Added support for new extensions**:

* [`flarum/bbcode`](https://github.com/flarum/bbcode)
* [`flarum/nicknames`](https://github.com/flarum/nicknames)


**Updated translations for extensions**:

* [`askvortsov/flarum-discussion-templates`](https://github.com/askvortsov1/flarum-discussion-templates)
* [`flarum/likes`](https://github.com/flarum/likes)
* [`flarum/mentions`](https://github.com/flarum/mentions)
* [`flarum/tags`](https://github.com/flarum/tags)
* [`fof/nightmode`](https://github.com/FriendsOfFlarum/nightmode)
* [`ziiven/flarum-money-leaderboard`](https://github.com/Ziiven/flarum-money-leaderboard)


All changes: [1.6.0...1.7.0](https://github.com/flarum-lang/spanish/compare/1.6.0...1.7.0).


1.6.0 (2023-03-13)
------------------

**General changes**:

* Updated Flarum core translations.


**Added support for new extensions**:

* [`askvortsov/flarum-checklist`](https://github.com/askvortsov1/flarum-checklist)
* [`askvortsov/flarum-discussion-templates`](https://github.com/askvortsov1/flarum-discussion-templates)
* [`askvortsov/flarum-help-tags`](https://github.com/askvortsov1/flarum-help-tags)
* [`askvortsov/flarum-markdown-tables`](https://github.com/askvortsov1/flarum-markdown-tables)
* [`askvortsov/flarum-moderator-warnings`](https://github.com/askvortsov1/flarum-moderator-warnings)
* [`askvortsov/flarum-pwa`](https://github.com/askvortsov1/flarum-pwa)
* [`askvortsov/flarum-rich-text`](https://github.com/askvortsov1/flarum-rich-text)
* [`askvortsov/flarum-saml`](https://github.com/askvortsov1/flarum-saml)
* [`blomstra/readme`](https://extiverse.com/extension/blomstra/readme)
* [`fof/recaptcha`](https://github.com/FriendsOfFlarum/recaptcha)
* [`the-turk/flarum-nodp`](https://github.com/the-turk/flarum-nodp)
* [`ziiven/flarum-money-leaderboard`](https://github.com/Ziiven/flarum-money-leaderboard)


**Updated translations for extensions**:

* [`blomstra/payments`](https://extiverse.com/extension/blomstra/payments)
* [`flarum/akismet`](https://github.com/flarum/akismet)
* [`flarum/tags`](https://github.com/flarum/tags)
* [`michaelbelgium/flarum-discussion-views`](https://github.com/MichaelBelgium/flarum-discussion-views)
* [`v17development/flarum-blog`](https://github.com/v17development/flarum-blog)


All changes: [1.5.0...1.6.0](https://github.com/flarum-lang/spanish/compare/1.5.0...1.6.0).


1.5.0 (2022-12-05)
------------------

**General changes**:

* Updated Flarum core translations.


**Added support for new extensions**:

* [`clarkwinkelmann/flarum-ext-post-stream-search`](https://github.com/clarkwinkelmann/flarum-ext-post-stream-search)
* [`fof/disposable-emails`](https://github.com/FriendsOfFlarum/disposable-emails)
* [`kilowhat/flarum-ext-audit-free`](https://github.com/kilowhat/flarum-ext-audit-free)
* [`michaelbelgium/flarum-discussion-views`](https://github.com/MichaelBelgium/flarum-discussion-views)


**Updated translations for extensions**:

* [`clarkwinkelmann/flarum-ext-author-change`](https://github.com/clarkwinkelmann/flarum-ext-author-change)
* [`clarkwinkelmann/flarum-ext-first-post-approval`](https://github.com/clarkwinkelmann/flarum-ext-first-post-approval)
* [`flarum/likes`](https://github.com/flarum/likes)
* [`flarum/markdown`](https://github.com/flarum/markdown)
* [`flarum/mentions`](https://github.com/flarum/mentions)
* [`flarum/suspend`](https://github.com/flarum/suspend)
* [`flarum/tags`](https://github.com/flarum/tags)
* [`fof/forum-statistics-widget`](https://github.com/FriendsOfFlarum/forum-statistics-widget)
* [`fof/links`](https://github.com/FriendsOfFlarum/links)
* [`fof/masquerade`](https://github.com/FriendsOfFlarum/masquerade)
* [`fof/oauth`](https://github.com/FriendsOfFlarum/oauth)
* [`fof/polls`](https://github.com/FriendsOfFlarum/polls)
* [`fof/share-social`](https://github.com/FriendsOfFlarum/share-social)
* [`fof/socialprofile`](https://github.com/FriendsOfFlarum/socialprofile)
* [`fof/user-directory`](https://github.com/FriendsOfFlarum/user-directory)
* [`sycho/flarum-move-posts`](https://github.com/SychO9/flarum-move-posts)


All changes: [1.4.0...1.5.0](https://github.com/flarum-lang/spanish/compare/1.4.0...1.5.0).


1.4.0 (2022-11-21)
------------------

**General changes**:

* Updated Flarum core translations.


**Added support for new extensions**:

* [`clarkwinkelmann/flarum-ext-author-change`](https://github.com/clarkwinkelmann/flarum-ext-author-change)
* [`fof/follow-tags`](https://github.com/FriendsOfFlarum/follow-tags)
* [`fof/webhooks`](https://github.com/FriendsOfFlarum/webhooks)
* [`sycho/flarum-move-posts`](https://github.com/SychO9/flarum-move-posts)


**Updated translations for extensions**:

* [`flarum/likes`](https://github.com/flarum/likes)
* [`flarum/mentions`](https://github.com/flarum/mentions)
* [`flarum/statistics`](https://github.com/flarum/statistics)
* [`justoverclock/related-discussions`](https://extiverse.com/extension/justoverclock/related-discussions)


All changes: [1.3.2...1.4.0](https://github.com/flarum-lang/spanish/compare/1.3.2...1.4.0).


1.3.2 (2022-10-11)
------------------

**Updated translations for extensions**:

* [`flarum/subscriptions`](https://github.com/flarum/subscriptions)


All changes: [1.3.1...1.3.2](https://github.com/flarum-lang/spanish/compare/1.3.1...1.3.2).


1.3.1 (2022-10-11)
------------------

**Updated translations for extensions**:

* [`fof/upload`](https://github.com/FriendsOfFlarum/upload)


All changes: [1.3.0...1.3.1](https://github.com/flarum-lang/spanish/compare/1.3.0...1.3.1).


1.3.0 (2022-10-07)
------------------

**Added support for new extensions**:

* [`fof/upload`](https://github.com/FriendsOfFlarum/upload)


All changes: [1.2.2...1.3.0](https://github.com/flarum-lang/spanish/compare/1.2.2...1.3.0).
