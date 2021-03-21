<p align="center">
  <a href="https://github.com/FlarumES/lang-spanish">
    <img src="https://flarumes.com/assets/logo-qmhd7tk4.png" alt="Logo">
  </a>

  <h3 align="center">Spanish Language Pack for <a href="https://flarum.org">Flarum</a></h3>

  <p align="center">
    Spanish Language Pack to localise the Flarum software, including its extensions and libraries by the FlarumES Community.
    <br />
    <a href="https://github.com/FlarumES/lang-spanish"><strong>Explore the docs »</strong></a>
    <br />
    <br />
    <a href="https://flarumes.com">View Demo</a>
    ·
    <a href="https://github.com/FlarumES/lang-spanish/issues">Report Bug</a>
    ·
    <a href="https://github.com/FlarumES/lang-spanish/issues">Request Feature</a>
  </p>
</p>



<details open="open">
  <summary><h2 style="display: inline-block">Table of Contents</h2></summary>
  <ol>
    <li>
      <a href="#about-the-project">About The Project</a>
    </li>
    <li>
      <a href="#getting-started">Getting Started</a>
      <ul>
        <li><a href="#minimum-requirements">Minimum Requirements</a></li>
        <li><a href="#installation">Installation</a></li>
        <li><a href="#updating">Updating</a></li>
      </ul>
    </li>
    <li><a href="#usage">Usage</a></li>
    <li><a href="#contributing">Contributing</a></li>
    <li><a href="#license">License</a></li>
    <li><a href="#contact">Contact</a></li>
    <li><a href="#useful-links">Useful Links</a></li>
  </ol>
</details>


## About The Project

![FlarumES](https://flarumes.com/assets/site-image-bfqb2dxn.png)

Spanish language pack for Flarum Software, includes its extensions and libraries in two Spanish language registers: Formal Spanish and Informal Spanish, both selectable from the extension administrator dashboard.

This extension is maintained by members of the verified Flarum en Español community.

## Getting Started

In order to install the Spanish language extension package, you will need to follow these simple steps.


### Minimum Requirements

* <a href="https://flarum.org">Flarum</a> 0.1.0-beta.16 (RC 1)


### Installation

Flarum uses Composer to manage its dependencies and extensions. The Spanish language pack is available on <a href="https://packagist.org/packages/FlarumES/lang-spanish">Packagist</a> and can be managed that way. Make sure <a href="https://getcomposer.org/">Composer</a> is installed on your server, then run the following command at the location where Flarum is installed:
   ```
   composer require flarumes/lang-spanish
   ```

### Updating

As with the installation procedure, make sure <a href="https://getcomposer.org/">Composer</a> is installed on your server, and then run the following commands at the location where Flarum is installed:
   ```
   composer update flarumes/lang-spanish
   php flarum cache:clear
   ```


## Usage

1. Once the extension is installed, you will have to activate it from the administrator panel:

![FlarumES](https://flarumes.com/assets/site-image-bfqb2dxn.png)

2. Next you will be able to select the Spanish register (formal and informal) that you want to use.

![FlarumES](https://flarumes.com/assets/site-image-bfqb2dxn.png)

## Contributing

This repository uses a <a href="https://weblate.org/">Weblate</a> instance hosted and managed by <a href="https://github.com/rob006">Robert Korulczyk</a>.

You can contribute to the language pack on this <a href="https://weblate.rob006.net/languages/">page</a> and see the detailed status of the translation on this page.


## License

Distributed under the MIT License. See <a href="https://github.com/FlarumES/lang-spanish/blob/main/LICENSE">`LICENSE`</a> for more information.


## Contact

[FlarumES.com](https://FlarumES.com) · [@FlarumES](https://twitter.com/FlarumES) · flarumes@gmail.com


## Useful Links

* [Flarum](https://flarum.org)
* [FlarumES](https://FlarumES.com)
* [GitHub](https://github.com/FlarumES/lang-spanish)
* [Composer](https://getcomposer.org/)
* [Packagist](https://packagist.org/)
* [Weblate](https://weblate.org/)