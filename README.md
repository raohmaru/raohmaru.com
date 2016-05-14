# raohmaru.com website files
Crafted with love using [Notepad++](https://notepad-plus-plus.org/). Build on top of the [HTML5 Boilerplate](https://html5boilerplate.com/).

## How to build
It uses [Ant Build Script](https://github.com/h5bp/ant-build-script) to optimize the code for production.

### Requirements
The build script requires Java 1.6 and Java JDK 1.5 or later.

#### Linux
Use `yum install ant-contrib`.

#### OSX
Install [MacPorts](https://www.macports.org/install.php) and then do `sudo port install ant-contrib`.

#### Windows
Get [WinAnt](http://code.google.com/p/winant/) and point the installer to your Java bin/ directory.

### Running the build script
Open your terminal application or command line application, change to the build/ directory and run
any of the following commands:
```
ant build     # minor html optimizations (extra quotes removed). inline script/style minified (default)
ant buildkit  # all html whitespace retained. inline script/style minified 
ant basics    # same as build minus the basic html minfication
ant minify    # same as build plus full html minification
ant text      # same as build but without image (png/jpg) optimizing
```

## LICENSE
Copyright (c) 2016 Raohmaru.

Released under the MIT License.