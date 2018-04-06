# Demo - Multiple Plugins with Composer

Reference: This demo is responding to a [question on Torque](https://torquemag.io/2018/03/using-symfony-options-resolver-wordpress/#div-comment-245982).

This repo demonstrates that Composer avoids class name conflicts _when_ more than one WordPress plugin has the same dependency in it.  

It also demonstrates that each plugin can have its own instance of Composer, its autoloader, and the same package, which in this case is Symfony's `OptionsResolver`.

[Watch the demonstration on Vimeo](https://vimeo.com/263444256).
