# Elastification/php-client
[![Build Status](https://travis-ci.org/elastification/php-client.svg?branch=master)](https://travis-ci.org/elastification/php-client)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/elastification/php-client/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/elastification/php-client/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/elastification/php-client/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/elastification/php-client/?branch=master)
[![Dependency Status](https://www.versioneye.com/user/projects/53f0a39c13bb0688860006d2/badge.svg?style=flat)](https://www.versioneye.com/user/projects/53f0a39c13bb0688860006d2)

[![Latest Stable Version](https://poser.pugx.org/elastification/php-client/v/stable.svg)](https://packagist.org/packages/elastification/php-client) [![Total Downloads](https://poser.pugx.org/elastification/php-client/downloads.svg)](https://packagist.org/packages/elastification/php-client) [![Latest Unstable Version](https://poser.pugx.org/elastification/php-client/v/unstable.svg)](https://packagist.org/packages/elastification/php-client) [![License](https://poser.pugx.org/elastification/php-client/license.svg)](https://packagist.org/packages/elastification/php-client)

[![SensioLabsInsight](https://insight.sensiolabs.com/projects/205b5f0a-f655-4515-af02-d32351fde447/mini.png)](https://insight.sensiolabs.com/projects/205b5f0a-f655-4515-af02-d32351fde447)

---


ToDo
====

Global:
- [ ] Symfony2 Bundle
- [ ] Vagrant boxes for different elasticsearch versions

Dawen:

- [ ] CreateIndexRequest
- [ ] DeleteIndexRequest
- [ ] IndexExistsRequest
- [ ] CreateMappingRequest
- [ ] CountRequest / only term is possible here
- [x] Unit Test for client
- [ ] Integration tests for RequestManager
- [ ] Helper for Version response compare. (Symfony/Console)
- [ ] After helper for response compare, refactor requests. I think version base requests are not needed.

xenji:
- [x] Add thrift transport
- [ ] Add tests for the transports
- [x] API Documentation, available at [http://elastification.github.io/php-client/](http://elastification.github.io/php-client/)
- [ ] Written documentation with examples
