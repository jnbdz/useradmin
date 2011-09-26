Cassandra-Schema
=============

##Configuration

Change the driver value in auth.php configuration file to cassandra.

##Need Cassandra Module

Got to: https://github.com/jnbdz/Kohana-Cassandra to get the Koahana-Cassandra module.

##Don't forget

Do not forget to follow the instructions to how to install Cassandra/Thrift/PHPCassa in the README.md file of Kohana-Cassandra.

##Connect to Cassandra

`bin/cassandra-cli -host localhost -port 9160`

##Create a keyspace

create keyspace ''keyspace'';

##Go to your keyspace

use ''keyspace'';

##Create column family Users

``create column family Users with comparator=UTF8Type and default_validation_class=UTF8Type and column_metadata = [
{column_name: username, validation_class: UTF8Type, index_type: KEYS},
{column_name: email, validation_class: UTF8Type, index_type: KEYS},
{column_name: email_verified, validation_class: UTF8Type},
{column_name: password, validation_class: UTF8Type},
{column_name: logins, validation_class: LongType},
{column_name: last_login, validation_class: LongType},
{column_name: last_failed_login, validation_class: LongType},
{column_name: failed_login_count, validation_class: LongType},
{column_name: created, validation_class: LongType},
{column_name: modify, validation_class: LongType}];``

##Create column family UsersActivationCode

``create column family UsersActivationCode with comparator = UTF8Type and default_validation_class=UTF8Type and column_metadata = [
{column_name: host_of_activ_code, validation_class: TimeUUIDType, index_type: KEYS},
{column_name: invited_user_email, validation_class: UTF8Type, index_type: KEYS},
{column_name: activation_code, validation_class: UTF8Type, index_type: KEYS}
];``

##Definition of validation class types

1. SuperColumns have a similar CompareSubcolumnsWith attribute.
2. BytesType: Simple sort by byte value. No validation is performed.
3. AsciiType: Like BytesType, but validates that the input can be parsed as US-ASCII.
4. UTF8Type: A string encoded as UTF8
5. LongType: A 64bit long
6. LexicalUUIDType: A 128bit UUID, compared lexically (by byte value)
7. TimeUUIDType: a 128bit version 1 UUID, compared by timestamp

##About UUID's

- http://en.wikipedia.org/wiki/Universally_unique_identifier
- http://wiki.apache.org/cassandra/UUID
