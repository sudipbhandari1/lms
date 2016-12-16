DROP TABLE IF EXISTS admin;

CREATE TABLE `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

INSERT INTO admin VALUES("1","saroj","saroj");
INSERT INTO admin VALUES("4","nepal","nepal");
INSERT INTO admin VALUES("6","admin","admin");


DROP TABLE IF EXISTS book;

CREATE TABLE `book` (
  `book_id` int(11) NOT NULL AUTO_INCREMENT,
  `author` varchar(50) NOT NULL,
  `Publisher` varchar(50) NOT NULL,
  `Year` date NOT NULL,
  `Edition` varchar(50) NOT NULL,
  `summary` text NOT NULL,
  `ISBN` varchar(50) NOT NULL,
  `pages` int(11) NOT NULL,
  `weblink` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  PRIMARY KEY (`book_id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

INSERT INTO book VALUES("9","Ramesh pudasaini","sk print house","0000-00-00","10th","calculate                                      ","","1","","math","Information Technology");
INSERT INTO book VALUES("10","nimesh maharjan","ddd","0000-00-00","1st","beauty of nepal","9","1","","nepali view","Tourism");
INSERT INTO book VALUES("11","akash","aaa","0000-00-00","1st","abcd","10","1","","health","Humanity");
INSERT INTO book VALUES("12","sarojjjj","abs","0000-00-00","1st","kjhk","12","1","","social","Humanity");
INSERT INTO book VALUES("13","saroj","santosh","0000-00-00","1st","this is software","111","1","sodt.cu","software","Information Technology");
INSERT INTO book VALUES("14","ll","k","2020-02-02","hkjhkjjh","sdjdsfksldfkfdj","223","1","sdsj.com","dfjasdklk","Information Technology");
INSERT INTO book VALUES("15","shyam prashad","ramashyam","2016-08-02","1st","kdjdsdjsa","999","1","","kantipur","mazine");
INSERT INTO book VALUES("16","sndjsndm,sandns","smdnsaands,mnd","2016-08-05","1st","xnfkjsndn","88888","1","www.sdfdsbf.com","snfnskjab,asn","Information Technology");
INSERT INTO book VALUES("17","test","test","0000-00-00","test","test","test","12","test","test","Science");


DROP TABLE IF EXISTS category;

CREATE TABLE `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `c_name` varchar(50) NOT NULL,
  `c_symbol` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

INSERT INTO category VALUES("1","Information Technology","IT");
INSERT INTO category VALUES("2","Science","sci");
INSERT INTO category VALUES("3","Management","mng");
INSERT INTO category VALUES("4","Humanity","hum");
INSERT INTO category VALUES("5","Tourism","trm");
INSERT INTO category VALUES("6","abc","12345");
INSERT INTO category VALUES("7","mazine","MZ");
INSERT INTO category VALUES("8","porn","p0");
INSERT INTO category VALUES("9","networking","ntw");
INSERT INTO category VALUES("10","dkfasdjf","213123");


DROP TABLE IF EXISTS fine;

CREATE TABLE `fine` (
  `fine_id` int(11) NOT NULL AUTO_INCREMENT,
  `fine_amount` int(11) NOT NULL,
  PRIMARY KEY (`fine_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

INSERT INTO fine VALUES("1","10");
INSERT INTO fine VALUES("2","10");


DROP TABLE IF EXISTS publisher;

CREATE TABLE `publisher` (
  `publisher_id` int(11) NOT NULL AUTO_INCREMENT,
  `p_name` varchar(50) NOT NULL,
  PRIMARY KEY (`publisher_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

INSERT INTO publisher VALUES("1","tst");
INSERT INTO publisher VALUES("2","test");


DROP TABLE IF EXISTS students;

CREATE TABLE `students` (
  `student_id` int(11) NOT NULL AUTO_INCREMENT,
  `f_name` varchar(50) NOT NULL,
  `l_name` varchar(50) NOT NULL,
  `adress` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `DoB` date NOT NULL,
  `joined_date` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  PRIMARY KEY (`student_id`)
) ENGINE=InnoDB AUTO_INCREMENT=140092 DEFAULT CHARSET=utf8;

INSERT INTO students VALUES("1","saroj","koirala","gothatar","9843545501","2012-11-05","0000-00-00","female");
INSERT INTO students VALUES("2","santosh","tamang","gothatar","9853545556","2012-01-01","0000-00-00","male");
INSERT INTO students VALUES("3","bikash","pokherel","mantar","9813124724","2013-01-01","0000-00-00","male");
INSERT INTO students VALUES("4","sujan","khanal","nayabasti","9849745711","2012-02-01","0000-00-00","male");
INSERT INTO students VALUES("12","dfhkjashh","dgdg","hj","341341","2021-02-11","2008-06-17","male");
INSERT INTO students VALUES("22132","sushil","koirala","djflkaldkfjl","2341341","2022-02-02","0000-00-00","male");
INSERT INTO students VALUES("140090","saroj123","koirala","gothatar","9843545501","1995-05-01","2016-08-03","male");
INSERT INTO students VALUES("140091","aasd","dsd","sdf","9876543211","0000-00-00","0000-00-00","male");


DROP TABLE IF EXISTS transaction;

CREATE TABLE `transaction` (
  `t_id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` varchar(50) NOT NULL,
  `student_name` varchar(50) NOT NULL,
  `book_title` varchar(50) NOT NULL,
  `issue_date` date NOT NULL,
  `due_date` date NOT NULL,
  `renew_date` date NOT NULL,
  `return_date` date NOT NULL,
  `fine` int(11) NOT NULL,
  `book_isbn` varchar(50) NOT NULL,
  PRIMARY KEY (`t_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

INSERT INTO transaction VALUES("1","1","saroj","social","2016-08-01","2016-08-17","2016-08-10","2016-08-16","100","12");
INSERT INTO transaction VALUES("2","1","saroj koirala","social","2020-05-05","2024-04-15","2016-08-02","2016-08-10","0","12");
INSERT INTO transaction VALUES("3","1","saroj koirala","computer system","2012-12-01","2015-01-01","2016-08-04","2016-08-13","0","3");
INSERT INTO transaction VALUES("4","3","bikash pokherel","computer system","2013-01-01","2014-01-01","0000-00-00","2013-05-05","0","3");
INSERT INTO transaction VALUES("5","1","saroj koirala","snfnskjab,asn","2013-08-08","2015-08-30","0000-00-00","2016-01-01","0","88888");
INSERT INTO transaction VALUES("6","3","bikash pokherel","computer system","2016-08-02","2016-08-01","0000-00-00","0000-00-00","0","3");
INSERT INTO transaction VALUES("7","140090","saroj123 koirala","computer system","2016-12-11","2016-12-20","2016-12-18","2017-01-03","0","3");
INSERT INTO transaction VALUES("8","1","saroj koirala","math","0000-00-00","0000-00-00","0000-00-00","0000-00-00","0","");


