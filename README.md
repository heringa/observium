# observium


__________
### Superseded

This code is no longer needed from juli 2015.

SRX session graphs are now supported natively by Observium.
__________

Observium customization

There is no support for Juniper SRX session graphs built in Observium by its maintainers.
It takes only a few lines of code to add this functionality, based on the original Observium code.

Many thanks to Heinrich Mainka (Telefonica) for his contribution to make this work on high-end SRX's.

These files are tested up to Observium svn-version 6462.

#### Files and patches
To enable polling and graphing you need these files and patches:

*Additional files*
* /opt/observium/html/pages/device/graphs/juniper-session.inc.php
* /opt/observium/html/includes/graphs/device/junosfw_sessions.inc.php

*Patches*
* junos.inc.php.diff for /opt/observium/includes/polling/os/junos.inc.php
* graphtypes.inc.php.diff for /opt/observium/includes/definitions/graphtypes.inc.php


#### Overview
To create a custom menu entry with all Juniper SRX (and Palo Alto because that's usefull to me ;-) ) graphs on a single page you could add these files or their content:

* /opt/observium/html/includes/navbar-custom.inc.php
* /opt/observium/html/includes/graphs/device/customfw_sessions.inc.php

