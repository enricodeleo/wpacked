#WPacked

## Background

Since I started developing with Node.js I really loved the modularity of the usual node development flow. You usually just need to pull a repo (or scaffold a project with yeoman) and you're good to go on your local machine, without a full fledged webserver, and with a lovely dependency management. And when you're ready to go online? Well you just deploy your package or sort of. 

Since I'm also a huge WordPress fan, I tried to reproduce a similar flow with my favorite CMS, so here we are: my attempt to make WordPress as a self contained, _packaged application_ as possible. Hope you enjoy it ;)

## Key features

* Git-friendly
* Dependency management via [Composer](https://getcomposer.org/)
* Deployable and versionable DB thanks to [SQLite Integration](https://wordpress.org/plugins/sqlite-integration/) (WordPress Plugin)

## Requirements

* A Unix-like OS
* PHP >= 5.4
* Composer
* SQLite

## Requirements installation

### OS X 

The best way to get all the requirements is _Homebrew_. 
If you haven't it yet, well you should. Follow the instructions [on the Homebrew's official website](http://brew.sh/).

There's a project that let you install all the php-related stuffs with ease: [Homebrew php](https://github.com/Homebrew/homebrew-php). Get it typing on your terminal:

`$ brew tap homebrew/dupes`

`$ brew tap homebrew/versions`

`$ brew tap homebrew/homebrew-php`

Then install the php version of your choice with

`$ brew install php56`

You'll need also Composer, so let install it:

`brew install composer`

#### Optional

Optional but suggested [wp-cli](https://github.com/wp-cli/wp-cli). It'll speed up several operations giving you the possibility to issue commands to WordPress via terminal.
This repo has a wp-cli.yml that automatically will point wp-cli to the actual wordpress directory, you just need to use the `wp` command inside the project directory.

`brew install wp-cli`

### Linux

- todo, feel free to pull request -

## Quick Start

Clone this repo and type 

```bash
composer install
```

in order to install all the dependencies of the project. *You are already done*, just launch the php's built-in server with

```bash
php -S localhost:3000 -t app/
```
