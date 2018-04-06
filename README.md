# Demo - Multiple Plugins with Composer

This repo demonstrates that Composer avoids class name conflicts _when_ more than one WordPress plugin has the same dependency in it.  

It also demonstrates that each plugin can have its own instance of Composer, its autoloader, and the same package, which in this case is Symfony's `OptionsResolver`.
