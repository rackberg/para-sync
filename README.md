# Para-Sync Plugin

[![Build Status](https://travis-ci.org/rackberg/para-sync.svg?branch=master)](https://travis-ci.org/rackberg/para-sync)
[![Dependency Status](https://dependencyci.com/github/rackberg/para-sync/badge)](https://dependencyci.com/github/rackberg/para-sync)
[![Current Version](https://img.shields.io/badge/release-1.0.0-0e5487.svg)](https://github.com/rackberg/para-sync/releases)

A plugin for the para console application to enable file syncing.

## How to use it?
This plugin extends the `para` console application.

A new `sync` command will be provided to be able to synchronize files within `para` projects.

### Prerequisites

If you don't have installed para, please take a look in the [Para README.md](https://github.com/rackberg/para) in order to install it. 

### Installing the plugin
To install the `para` plugin simply execute the following commands:
```
# Change into the directory where you installed para.
cd <para-install-path>

# Use composer to install the para-sync plugin
composer require lrackwitz/para-sync
```
If everything worked, you can now use the extended functionality of this plugin.

## Contributing
Please read [CONTRIBUTING.md](CONTRIBUTING.md) for details on the code of conduct, and the process for creating issues or submitting pull requests.

## Versioning
This project uses [SemVer](https://semver.org/) for versioning. For the versions available, see the [tags on this repository](https://github.com/rackberg/para/tags).

Have a look at the [CHANGELOG.md](CHANGELOG.md).

## Authors
* **Lars Rosenberg** - *Initial work* - [Para](https://github.com/rackberg/para)

## Credits
I want to say thank you to [comm-press GmbH](https://comm-press.de/) for supporting me developing `para`. 

## License
This project is licensed under the GPL-3.0-or-later License - see the [LICENSE.md](LICENSE.md) file for details.
