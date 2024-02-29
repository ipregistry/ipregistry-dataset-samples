## Requirements

To run the PHP script `lookup.php`, Docker is necessary since the script is executed within a Docker container.

## How to Run

Execute the following command on Linux:

```
$ ./test.sh
MMDB sample downloaded and saved locally as ipregistry-company-sample.mmdb
Data for IP: 165.225.231.19
Array
(
    [asn] => 53813
    [domain] => zscaler.com
    [name] => Zscaler, Inc.
    [type] => isp
)
```

This will download the MMDB sample and save it locally as 
_ipregistry-company-sample.mmdb_. It then displays data for the IP address you set in 
the script, showing details such as ASN, domain, name, and type.

## Important Information

Within the lookup.php script, you must assign a specific value to the `$ipAddress` variable based on your need.

Please be aware that the dataset samples are refreshed at least daily and contain only 100 random entries. 

Both the CSV and MMDB formats contain identical IP entries. If you want to lookup a specific IP address in the MMDB dataset, refer to the CSV sample to select an IP that falls within an existing range.
