CREATE TABLE budgets(
	id INT NOT NULL AUTO_INCREMENT,
    fromDateTime DATETIME(6),
    ToDateTime DATETIME(6),
    amount DECIMAL(19,4),
    PRIMARY KEY(id)
);
CREATE TABLE categorys (
    id INT NOT NULL AUTO_INCREMENT,
    name varchar(255),
    PRIMARY KEY(id)
);
CREATE TABLE expenses (
    id INT NOT NULL AUTO_INCREMENT,
    categorys_id INT,
    creationTimeStamp DATETIME(6), -- timeStamp is a reserved word.
    amount DECIMAL(19,4),
    comments VARCHAR(255), -- comment is taken, made it comments
    -- im skipping adress
    PRIMARY KEY (id),
    FOREIGN KEY (categorys_id) REFERENCES categorys_id(id)
);
CREATE TABLE users_expenses (
    id INT NOT NULL AUTO_INCREMENT,
    expenses_id INT,
    users_id INT,
    PRIMARY KEY(id),
    FOREIGN KEY(expenses_id) REFERENCES expenses(id) ON DELETE CASCADE,
    FOREIGN KEY(users_id) REFERENCES users(id)
);
CREATE TABLE categorys_budgets (
	id INT NOT NULL AUTO_INCREMENT,
	budgets_id INT,
    categorys_id INT,
    PRIMARY KEY(id),
    FOREIGN KEY(budgets_id) REFERENCES budgets(id) ON DELETE CASCADE,
    FOREIGN KEY(categorys_id) REFERENCES categorys(id) ON DELETE CASCADE
);
CREATE TABLE users_categorys (
	id INT NOT NULL AUTO_INCREMENT,
	users_id INT,
	categorys_id INT,
	PRIMARY KEY(id),
	FOREIGN KEY(categorys_id) REFERENCES categorys(id) ON DELETE CASCADE,
	FOREIGN KEY(users_id) REFERENCES users(id)
);
CREATE TABLE settings (
	id INT NOT NULL AUTO_INCREMENT,
    users_id INT,
    categoryCount INT,
    mainColour varchar(10),
    mainStyle varchar(10),
    notificationPreference INT, -- Int/varchar?
    -- more stuff?
    PRIMARY KEY (id),
    FOREIGN KEY (users_id) REFERENCES users(id) ON DELETE CASCADE
);

ALTER TABLE users
    ADD COLUMN age INT,
    -- ADD COLUMN gender VARCHAR(12),
    ADD COLUMN gender ENUM('F','M','O') -- not exactly what's the best way to hold gender.
    -- ADD COLUMN Roles INT(10) UNSIGNED NOT NULL
    -- roles or something will be needed for the admin/user distinction
    AFTER email


-- add the foreign key to expenses
		ALTER TABLE expenses ADD user_id INT NOT NULL DEFAULT 1;
		ALTER TABLE expenses ADD FOREIGN KEY (`user_id`) REFERENCES users(`id`);
