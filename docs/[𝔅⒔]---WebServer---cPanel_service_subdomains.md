# Redirect each service's subdomain to the appropriate secure URL and port


| Service  |      Subdomain      |       Redirection        |
| -------- | ------------------- | ------------------------ |
| cPanel   |  cpanel.example.com | https://example.com:2083 |
| WHM      |     whm.example.com | https://example.com:2087 |
| Web Disk | webdisk.example.com | https://example.com:2078 |
| Webmail  | webmail.example.com | https://example.com:2096 |


`┌──────────┬─────────────────────┬──────────────────────────┐`

`│ Service- │ -----Subdomain----- │ ------Redirection------- │`

`├──────────┼─────────────────────┼──────────────────────────┤`

`│ cPanel-- │ -cpanel.example.com │ https://example.com:2083 │`

`│ WHM----- │ ----whm.example.com │ https://example.com:2087 │`

`│ Web Disk │ webdisk.example.com │ https://example.com:2078 │`

`│ Webmail- │ webmail.example.com │ https://example.com:2096 │`

`└──────────┴─────────────────────┴──────────────────────────┘`
