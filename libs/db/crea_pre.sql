create user "PRE" identified by "PRE"
 default tablespace users
 temporary tablespace temp;

grant "CONNECT" to "PRE";
grant "DBA" to "PRE";
grant "RESOURCE" to "PRE";
alter user "PRE" default role "CONNECT", "DBA", "RESOURCE";

grant all privileges to PRE;

