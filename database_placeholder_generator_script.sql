-- Budget Values
INSERT INTO budgets ( fromDateTime, ToDateTime, amount)
VALUES ('2005-04-30 07:27:39', '2011-04-30 07:27:39', 100.0000);
INSERT INTO budgets ( fromDateTime, ToDateTime, amount)
VALUES ('2000-04-30 07:27:39', '2001-04-30 07:27:39', 5000.0000);
INSERT INTO budgets ( fromDateTime, ToDateTime, amount)
VALUES ('2001-04-30 07:27:39', '2002-04-30 07:27:39', 5020.0000);
INSERT INTO budgets ( fromDateTime, ToDateTime, amount)
VALUES ('2002-04-30 07:27:39', '2003-04-30 07:27:39', 5003.0000);
INSERT INTO budgets ( fromDateTime, ToDateTime, amount)
VALUES ('2009-04-30 07:27:39', '2010-04-30 07:27:39', 50.0000);

-- Category_budget Values
INSERT INTO categorys_budgets (budgets_id, categorys_id)
VALUES (1,2);
INSERT INTO categorys_budgets (budgets_id, categorys_id)
VALUES (2,3);
INSERT INTO categorys_budgets (budgets_id, categorys_id)
VALUES (3,1);
INSERT INTO categorys_budgets (budgets_id, categorys_id)
VALUES (4,1);
INSERT INTO categorys_budgets (budgets_id, categorys_id)
VALUES (5,4);

-- categorys VALUES
INSERT INTO categorys(name)
VALUES ('Work expense');
INSERT INTO categorys(name)
VALUES ('Footbal');
INSERT INTO categorys(name)
VALUES ('Food and stuff');
INSERT INTO categorys(name)
VALUES ('Entertainment');
INSERT INTO categorys(name)
VALUES ('Unrelated');

-- expenses VALUES
INSERT INTO expenses(categorys_id,creationTimeStamp,amount,comments)
VALUES (1,'2000-04-30 07:27:39', 50.0000, 'bought license for software');
INSERT INTO expenses(categorys_id,creationTimeStamp,amount,comments)
VALUES (2,'2000-04-30 07:27:39', 10.0000, 'bought football');
INSERT INTO expenses(categorys_id,creationTimeStamp,amount,comments)
VALUES (3,'2000-04-30 07:27:39', 40.0000, 'bought food and stuff');
INSERT INTO expenses(categorys_id,creationTimeStamp,amount,comments)
VALUES (4,'2000-04-30 07:27:39', 500.0000, 'bought a boat');
INSERT INTO expenses(categorys_id,creationTimeStamp,amount,comments)
VALUES (5,'2000-04-30 07:27:39', 1000000.0000, 'gave out a small loan');

-- users_expenses VALUES
INSERT INTO users_expenses(expenses_id,users_id)
VALUES (1,1);
INSERT INTO users_expenses(expenses_id,users_id)
VALUES (2,1);
INSERT INTO users_expenses(expenses_id,users_id)
VALUES (3,3);
INSERT INTO users_expenses(expenses_id,users_id)
VALUES (4,4);
INSERT INTO users_expenses(expenses_id,users_id)
VALUES (5,5);

--settings VALUES
INSERT INTO settings(users_id,categoryCount,mainColour,mainStyle,notificationPreference)
VALUES (1,6, 'white', 'super-cool-style', 0);
INSERT INTO settings(users_id,categoryCount,mainColour,mainStyle,notificationPreference)
VALUES (2,16, 'red', 'not-cool-style', 1);
INSERT INTO settings(users_id,categoryCount,mainColour,mainStyle,notificationPreference)
VALUES (3,2, 'blue', 'super-cool-style', 2);
INSERT INTO settings(users_id,categoryCount,mainColour,mainStyle,notificationPreference)
VALUES (4,4, 'white', 'not-cool-style', 2);
INSERT INTO settings(users_id,categoryCount,mainColour,mainStyle,notificationPreference)
VALUES (5,6, 'red', 'cool-style', 1);
