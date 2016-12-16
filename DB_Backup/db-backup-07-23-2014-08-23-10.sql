DROP TABLE IF EXISTS admin;

CREATE TABLE `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

INSERT INTO admin VALUES("3","sajan","sajan");
INSERT INTO admin VALUES("6","admin","admin");
INSERT INTO admin VALUES("7","test","test");
INSERT INTO admin VALUES("8","nepalincl","chrsj");


DROP TABLE IF EXISTS book;

CREATE TABLE `book` (
  `book_id` int(11) NOT NULL AUTO_INCREMENT,
  `Author` varchar(50) NOT NULL,
  `Publisher` varchar(50) NOT NULL,
  `Year` date NOT NULL,
  `Edition` varchar(50) NOT NULL,
  `summary` text NOT NULL,
  `ISBN` varchar(50) DEFAULT NULL,
  `pages` int(11) NOT NULL,
  `weblink` varchar(100) DEFAULT NULL,
  `title` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  PRIMARY KEY (`book_id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

INSERT INTO book VALUES("23","G R martin","ak pretz","2014-04-13","first","jdaslkfj; asfa;s                                                                            ","Retwad","30","","game of thrones","Fiction");
INSERT INTO book VALUES("24","sajan","g pres","2014-04-13","first","good Book","t45tr","500","","test_book","vista");
INSERT INTO book VALUES("26","lpd","lkdsjfl;ks","2014-04-13","first","nice book\n","fjld343","422","","muna madan","story");


DROP TABLE IF EXISTS category;

CREATE TABLE `category` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `c_name` varchar(50) NOT NULL,
  `c_symbol` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

INSERT INTO category VALUES("2","Science","sci");
INSERT INTO category VALUES("3","second","sec");
INSERT INTO category VALUES("4","vista","vist");
INSERT INTO category VALUES("5","vr","vr");
INSERT INTO category VALUES("6","menu","men");
INSERT INTO category VALUES("7","df","dfsadfsa");
INSERT INTO category VALUES("8","dsa","");
INSERT INTO category VALUES("9","Fiction","fic");
INSERT INTO category VALUES("10","story","str");


DROP TABLE IF EXISTS fine;

CREATE TABLE `fine` (
  `fine_id` int(11) NOT NULL AUTO_INCREMENT,
  `fine_amount` int(11) NOT NULL,
  PRIMARY KEY (`fine_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO fine VALUES("1","10");


DROP TABLE IF EXISTS students;

CREATE TABLE `students` (
  `student_id` varchar(50) NOT NULL,
  `f_name` varchar(50) NOT NULL,
  `l_name` varchar(50) NOT NULL,
  `adress` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `DoB` date NOT NULL,
  `joined_date` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  PRIMARY KEY (`student_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO students VALUES("00143234","anoop ","Thakuri","lazimpat","4234232","2045-04-08","2014-07-17","male");
INSERT INTO students VALUES("00143722","Binaya","Bajracharya","Naya Baazar","234324","2050-04-04","2014-07-17","male");
INSERT INTO students VALUES("00143926","reema","dhakal","bkt","32423","1993-07-17","2014-07-17","female");
INSERT INTO students VALUES("001439263","sajan","lamsla","anamnagar","4324234","2045-04-08","2014-07-17","male");


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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

INSERT INTO transaction VALUES("7","00143926","reema dhakal","test_book","2014-07-19","2014-12-12","0000-00-00","0000-00-00","0","t45tr");
INSERT INTO transaction VALUES("8","001439263","sajan lamsla","muna madan","2014-07-19","2014-12-12","0000-00-00","0000-00-00","0","fjld343");


