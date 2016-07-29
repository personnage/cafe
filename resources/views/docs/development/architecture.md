# Architecture Overview

Backend:
-------------
- PHP:7
- Postgres:9.5
- Node:6.2 (gulp, socket.io)
- Redis (session, cache)
- Beanstalkd (work queue)
- Disqus (Comments)?
- (Amazon S3 | Rackspace) FileStorage
- ELK for store event log. Before write to disk (event.log or audit.log)

- GeoIP2 (MaxMind) City|County (php extension)

Frontend:
-------------
- Scss
- Susy
- jQuery

Frontend Dashboard:
-------------
- Scss
- jQuery
- Twitter Boottrap
