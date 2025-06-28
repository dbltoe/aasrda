## The following can be run via phpMyAdmin, or by Admin->Tools->Install SQL Patches:

DELETE FROM configuration WHERE configuration_group_id=25 AND configuration_title='Define Clubs Status';
DELETE FROM configuration WHERE configuration_group_id=25 AND configuration_title='Define Officers Status';
DELETE FROM configuration WHERE configuration_group_id=25 AND configuration_title='Define Appointed Status';
DELETE FROM configuration WHERE configuration_group_id=25 AND configuration_title='Define Callers Status';
DELETE FROM configuration WHERE configuration_group_id=25 AND configuration_title='Define Weekly Status';

