
# Laravel Application: Multi-vendor + AIO Platform in MVC structure

The project structure is design base on assumption that we have 2 individual platforms and merge into 1 SaaS application

## System Requirements

Webserver Apache or Nginx or simply use built-in PHP server (artisan serve)
- PHP 8.1+
- MySQL 5.7+


## Architecture

The project architecture is base on the MVC structure provided by Laravel with some functional-directories to decorate the functionality like:
- Binding Resolution: allow developer to define reference between an abstract to a concrete class (context and non-context, instance or singleton)
- Contracts: allow developer to manage interfaces
- Helpers: allow developer to manage global, instance scope helper functions
- Jobs: allow developer to manage all delay tasks, scheduled tasks
- Integrations: allow developer to separate and manage integration code to 3rd Parties
- Repositories: allow developer to store repository class that contains methods to query data from model
- Services: allow developer to design and implement application business logic, services involves multiple repositories. By using services, developer can avoid cross reference between repositories and conflict in binding strategy.
- Traits: allow developer to manage Traits, class scope helper functions

Both MVC directories and functional-directories are design to handle multi platform in One application model, so they possess sub directory after the name of the platform like:
- CommercePlatform
- HelpdeskPlatform
- System

Building API backend also require a focus on versioning routes so the `controllers` folder is separated into `Api\V1` and `Api\V2`.
With a proper binding resolution and route configurations (at `routes/commerce_platform/v1.php` or `routes/commerce_platform/v1.php` or `routes/helpdesk_platform/v2.php` or `routes/helpdesk_platform/v2.php` ...), we can deploy an application that can scale, extend and refactoring risk-free.

## 🚀 About Me
Phuc Nguyen - A fullstack software engineer who sometime make simple things complicated in a beautiful approach

## Acknowledgements
- [Hexagonal Architecture by Alistair Cockburn](https://alistair.cockburn.us/hexagonal-architecture/)
