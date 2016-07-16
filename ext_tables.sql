CREATE TABLE tx_escort_account (
        uid int(11) unsigned DEFAULT '0' NOT NULL auto_increment,
        pid int(11) DEFAULT '0' NOT NULL,

        user varchar(255) DEFAULT 'user' NOT NULL,
        pass varchar(255) DEFAULT 'pass' NOT NULL,

        PRIMARY KEY (uid),
        KEY parent (pid)
) ENGINE=InnoDB;