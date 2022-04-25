# Monica Debian Package

This is a wrapper project around [Monica](https://www.monicahq.com/), a personal CRM.
The intent is to provide an apt-installable package for debian based systems without the need to deploy yarn or composer for use in production.

This includes the following package features:

* Automated SystemD service/timer installation
* Automated Monica update script invocation

## Versioning

The version of the package produced by this repo should closely resemble the version of Monica contained within with an additional suffix indicating the debian package build number.
This is so that updates to the package itself can occur while still using the same base version of Monica.

The suffix is reset back to 1 when Monica is updated.

## Updating Monica

We use git subtree to host a copy of the [Monica repository](https://github.com/monicahq/monica) locally.
In order to update our copy, in a clean clone of this repository run the following command:

```bash
git subtree pull --prefix source https://github.com/monicahq/monica.git vX.Y.Z --squash
```

Where X.Y.Z is the version of Monica you wish to update to.

You should then update the package changelog file to reflect the change in Monica version.
