create user "PROYFINAL" identified by "PROYFINAL"
 default tablespace users
 temporary tablespace temp;

grant "CONNECT" to "PROYFINAL";
grant "DBA" to "PROYFINAL";
grant "RESOURCE" to "PROYFINAL";
alter user "PROYFINAL" default role "CONNECT", "DBA", "RESOURCE";

grant all privileges to PROYFINAL;

