# xenobladeorg

##Installation
* ``composer install``    
* Configure local database (with existing xc data) in `.env.local` (copy `.env`)    
* ``php bin/console doc:mig:mig``   
* Run locally with `symfony server:start`

##Static output
The generation needs a bit more memore than the PHP default. Set inside your php.ini:    
`memory_limit=512M`    
Afterwards    
``php bin/console dump-static-site``    
(will be generated in /output)    
``php -S localhost:8001 -t output``    
to test generated static build