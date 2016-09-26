# Kirby Panel Extention Boilerplate

![Version](https://img.shields.io/badge/version-1.0.0-green.svg) ![License](https://img.shields.io/badge/license-MIT-green.svg) ![Kirby Version](https://img.shields.io/badge/Kirby-2.3%2B-red.svg)

*Version 1.0.0*

This is a boiler plate for people who want to extend the panel by adding pages to it.

## Installation

Use one of the alternatives below.

### 1. Kirby CLI

If you are using the [Kirby CLI](https://github.com/getkirby/cli) you can install this plugin by running the following commands in your shell:

```
$ kirby plugin:install lcd344/kirby-panel-extension-boilerplate
```

### 2. Clone or download

1. [Clone](https://github.com/lcd344/kirby-panel-extension-boilerplate.git) or [download](https://github.com/lcd344/kirby-panel-extension-boilerplate/archive/master.zip)  this repository.
2. Unzip the archive if needed and rename the folder to `panelExtensionBoilerPlate`.

**Make sure that the plugin folder structure looks like this:**

```
site/plugins/panelExtensionBoilerPlate/
```

### 3. Git Submodule

If you know your way around Git, you can download this plugin as a submodule:

```
$ cd path/to/kirby
$ git submodule add https://github.com/lcd344/kirby-panel-extension-boilerplate site/plugins/panelExtensionBoilerPlate
```

## Setup

This works out of the box.


## Usage

This is just to show the basics of how to extend the panel. There isn't much usage here.

Some instructions though
1) This adds route boilerplate to the panel (to access it you need to go to) yoursiteurl/panel/boilerplate

2) Your controller should be extending ExtendedBaseController - it will point it the right places

3) You will need to update the view class (inside the folder extendedClasses) to point to your view folder

4) This is a very basic use case - you might need to delve into the kirby source code to figure out some things (it's how I did it)

5) You will need to link to your new routes - I recommend using a widget.

## Requirements

As far as I know - might be compatible with older versions as well

- [**Kirby**](https://getkirby.com/) 2.3+

## Notes

I made this boiler plate to help the community and it's far away form a complete guide.
If you play around with this and feel like contributing, suggest to me changes and code and documentation and I'll gladly add them.

## Todo

- [ ] Make a more comprehensive loader for the kirby and panel extensions (if needed).

## Disclaimer

This plugin is provided "as is" with no guarantee. Use it at your own risk and always test it yourself before using it in a production environment. If you find any issues, please [create a new issue](https://github.com/username/plugin-name/issues/new).

## License

[MIT](https://opensource.org/licenses/MIT)

It is discouraged to use this plugin in any project that promotes racism, sexism, homophobia, animal abuse, violence or any other form of hate speech.
