# xenobladeorg

##Installation
* ``composer install``    
* Configure local database (with existing xc data) in `.env.local` (copy `.env`)    
* ``php bin/console doc:mig:mig``   
* Run locally with `symfony server:start`

##Static output
``php bin/console dump-static-site``    
(will be generated in /output)    
``php -S localhost:8001 -t output``    
to test generated static build