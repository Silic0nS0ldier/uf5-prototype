# UserFrosting 5 Prototype

This repo explores one possible incarnation of UserFrosting 5. The goal is to extract the UserFrosting framework entirely into a separate package such that individual projects have more flexibility around their preferred workflows, and to permit the creation of maintainable project skeletons.

This will present a major breaking change compared to v4. Common business logic areas should be less disrupted.

Notable differences to v4;
* Sprinkles register their dependencies at runtime, such that load order is always valid or will produce a clear deadlock error should a circular dependency chain form.
* There is (will be?) only 1 type of project, sprinkle. If published to Packagist, it may be consumed as a sprinkle. Web and `bakery` CLI code is minimal.
* Reliance on reflection has been reduced considerably.
* UserFrosting system all is delivered through composer.
* API surface has been reduced, avoiding global variables and preferring stateless (static) functions. This helps adhere to semantic versioning.
* Improved support for multi-node environments such as AWS Elastic Beanstalk, Azure Service Fabric, and Kubernetes.

## Looking Forward

Building on the changes that would be brought with the v5 prototype, the following will be investigated and (if appropriate) implemented.

* Decoupling of view component to support client side application models including;
  * A generalised client side API that can be easily used with (P)React, Vue, Angular, Svelte, and the existing server side setup.
  * New project skeletons built.
  * Revision of i18n and i10n support to permit a single source of truth across server and client apps.
* Theme support. Conditional loading of sprinkles is easy to achieve, however themes need to go beyond this to ensure logic remains unchanged for security and system integrity.
* Revision of services provider such that autocompletion is possible. If possible, this will almost definitely translate to a major revision of how Sprinkles are loaded.
