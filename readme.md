Central College Dining Services WordPress Theme
===================

A WordPress theme for Dining Services

Deployment
------------------
This theme is currently designed to be manually deployed to Flywheel.

Vagrant
------------------
To easily spin up a development server to work on this theme, we've included Vagrant configuration files. 

1. [Optional] Include a WordPress XML export of your site in the root of the theme named `wp-import-data.xml`. Vagrant will populate the development server with this data.
2. At the command line, navigate to the vagrant folder.
3. Run `vagrant up` to initate a test server.

Vagrant requires:
* Vagrant to be installed - http://docs.vagrantup.com/v2/installation/
* VirtualBox to be installed - https://www.virtualbox.org/wiki/Downloads