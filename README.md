# Internal Plugin Starter

Internal plugin starter for WordPress based project. It’s minimal & well structured!

If you want a **non-internal** plugin, please use this [plugin-starter](https://github.com/freshforces-borndigital/plugin-starter/)

## Table of Contents
1. [Dependency](#dependency)
2. [Installation](#installation)
3. [Usage](#usage)
4. [Contribution](#contribution)
5. [License](#license)


## Contents

### Dependency

Nothing. But you might want to put [TypeEasy](https://github.com/greenoss/TypeEasy) into your project ;)

### Installation

- Download the [latest release](https://github.com/freshforces-borndigital/internal-plugin-starter/releases/latest) & extract it
- Rename the `internal-plugin-starter` name into something else. E.g: **`yourprojectname-plugin`**
- Open `index.php` <small>(You can rename it into `yourprojectname-plugin.php` or just leave it as `index.php`)</small>
- Edit plugin identities: *Plugin Name, Plugin URI, Description, Version, Author, Author URI, License URI*
- Edit plugin text domain
- Upload into `wp-content/plugins`. So the structure should be like this:
	- **`wp-content`**
		- **`plugins`**
			- **`yourproject-plugin`** <small>(relative to your plugin name)</small>
				- **`dist`**
				- **`frameworks`**
				- **`vendor`**
				- **`your-component`** <small>(just sample)</small>
				- **`your-another-component`** <small>(just sample)</small>
				- `composer.json`
				- `index.php`
				- `LICENSE.txt`
				- `README.md`

### Contribution

- Idea, issue, & discussion: please submit issue
- Pull request if you want to contribute about: code, word, formatting, & even language corrections
- You can commit directly into **master** branch
- We follow [Semantic Versioning](http://semver.org/) for release convention. You can read the [*official website*](http://semver.org/) or dbrock's [*semver-howto*](https://github.com/dbrock/semver-howto)

### License

This simple *starter* is under very friendly open source license: [MIT License](https://github.com/freshforces-borndigital/internal-plugin-starter/blob/master/LICENSE.txt)
