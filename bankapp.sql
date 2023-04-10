-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 26, 2023 at 09:09 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bankapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `Bank`
--

CREATE TABLE `Bank` (
  `BankID` int(5) NOT NULL,
  `RoutingNum` int(10) NOT NULL,
  `BankName` varchar(30) NOT NULL,
  `BankUser` varchar(15) NOT NULL,
  `BankPass` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `CheckingAccount`
--

CREATE TABLE `CheckingAccount` (
  `CheckingID` int(5) NOT NULL,
  `AccNum` int(10) NOT NULL,
  `Balance` int(20) NOT NULL,
  `CustomerID` int(5) NOT NULL,
  `BankID` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `CreditCard`
--

CREATE TABLE `CreditCard` (
  `CreditCardID` int(5) NOT NULL,
  `CreditCardNum` int(16) NOT NULL,
  `CVV` int(3) NOT NULL,
  `IssueDate` date NOT NULL,
  `ExpDate` date NOT NULL,
  `CustomerID` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Customer`
--

CREATE TABLE `Customer` (
  `CustomerID` int(5) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `User` varchar(20) NOT NULL,
  `Pass` varchar(20) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Phone` int(10) NOT NULL,
  `Address` varchar(40) NOT NULL,
  `GovIDNum` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `DebitCard`
--

CREATE TABLE `DebitCard` (
  `DebitCardID` int(5) NOT NULL,
  `DebitCardNum` int(16) NOT NULL,
  `CVV` int(3) NOT NULL,
  `IssueDate` date NOT NULL,
  `ExpDate` date NOT NULL,
  `CustomerID` int(5) NOT NULL,
  `CheckingID` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Deposit`
--

CREATE TABLE `Deposit` (
  `DepositID` int(5) NOT NULL,
  `DepositAmt` int(10) NOT NULL,
  `CheckingID` int(5) NOT NULL,
  `SavingsID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `LoanApp`
--

CREATE TABLE `LoanApp` (
  `LoanAppID` int(5) NOT NULL,
  `LoanNum` int(10) NOT NULL,
  `LoanAmount` int(10) NOT NULL,
  `LoanType` varchar(25) NOT NULL,
  `CustomerID` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `LoanManager`
--

CREATE TABLE `LoanManager` (
  `LoanManID` int(5) NOT NULL,
  `EmployeeID` int(10) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `User` varchar(20) NOT NULL,
  `Pass` varchar(20) NOT NULL,
  `Address` varchar(40) NOT NULL,
  `Phone` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `SavingsAccount`
--

CREATE TABLE `SavingsAccount` (
  `SavingsID` int(5) NOT NULL,
  `AccNum` int(10) NOT NULL,
  `Balance` int(20) NOT NULL,
  `Interest` int(5) NOT NULL,
  `CustomerID` int(5) NOT NULL,
  `BankID` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Withdraw`
--

CREATE TABLE `Withdraw` (
  `WithdrawID` int(5) NOT NULL,
  `WithdrawAmt` int(10) NOT NULL,
  `CheckingID` int(5) NOT NULL,
  `SavingsID` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Bank`
--
ALTER TABLE `Bank`
  ADD PRIMARY KEY (`BankID`),
  ADD UNIQUE KEY `BankUser` (`BankUser`),
  ADD UNIQUE KEY `RoutingNum` (`RoutingNum`);

--
-- Indexes for table `CheckingAccount`
--
ALTER TABLE `CheckingAccount`
  ADD PRIMARY KEY (`CheckingID`),
  ADD UNIQUE KEY `AccNum` (`AccNum`),
  ADD KEY `CustomerID` (`CustomerID`),
  ADD KEY `BankID` (`BankID`);

--
-- Indexes for table `CreditCard`
--
ALTER TABLE `CreditCard`
  ADD PRIMARY KEY (`CreditCardID`),
  ADD UNIQUE KEY `CreditCardNum` (`CreditCardNum`),
  ADD KEY `CustomerID` (`CustomerID`);

--
-- Indexes for table `Customer`
--
ALTER TABLE `Customer`
  ADD PRIMARY KEY (`CustomerID`),
  ADD UNIQUE KEY `User` (`User`);

--
-- Indexes for table `DebitCard`
--
ALTER TABLE `DebitCard`
  ADD PRIMARY KEY (`DebitCardID`),
  ADD UNIQUE KEY `DebitCardNum` (`DebitCardNum`),
  ADD KEY `CheckingID` (`CheckingID`),
  ADD KEY `CustomerID` (`CustomerID`);

--
-- Indexes for table `Deposit`
--
ALTER TABLE `Deposit`
  ADD PRIMARY KEY (`DepositID`),
  ADD KEY `SavingsID` (`SavingsID`),
  ADD KEY `CheckingID` (`CheckingID`);

--
-- Indexes for table `LoanApp`
--
ALTER TABLE `LoanApp`
  ADD PRIMARY KEY (`LoanAppID`),
  ADD UNIQUE KEY `LoanNum` (`LoanNum`),
  ADD KEY `CustomerID` (`CustomerID`);

--
-- Indexes for table `LoanManager`
--
ALTER TABLE `LoanManager`
  ADD PRIMARY KEY (`LoanManID`),
  ADD UNIQUE KEY `User` (`User`);

--
-- Indexes for table `SavingsAccount`
--
ALTER TABLE `SavingsAccount`
  ADD PRIMARY KEY (`SavingsID`),
  ADD UNIQUE KEY `AccNum` (`AccNum`),
  ADD KEY `BankID` (`BankID`),
  ADD KEY `CustomerID` (`CustomerID`);

--
-- Indexes for table `Withdraw`
--
ALTER TABLE `Withdraw`
  ADD PRIMARY KEY (`WithdrawID`),
  ADD KEY `CheckingID` (`CheckingID`),
  ADD KEY `SavingsID` (`SavingsID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Bank`
--
ALTER TABLE `Bank`
  MODIFY `BankID` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `CheckingAccount`
--
ALTER TABLE `CheckingAccount`
  MODIFY `CheckingID` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `CreditCard`
--
ALTER TABLE `CreditCard`
  MODIFY `CreditCardID` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Customer`
--
ALTER TABLE `Customer`
  MODIFY `CustomerID` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `DebitCard`
--
ALTER TABLE `DebitCard`
  MODIFY `DebitCardID` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Deposit`
--
ALTER TABLE `Deposit`
  MODIFY `DepositID` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `LoanApp`
--
ALTER TABLE `LoanApp`
  MODIFY `LoanAppID` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `LoanManager`
--
ALTER TABLE `LoanManager`
  MODIFY `LoanManID` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `SavingsAccount`
--
ALTER TABLE `SavingsAccount`
  MODIFY `SavingsID` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Withdraw`
--
ALTER TABLE `Withdraw`
  MODIFY `WithdrawID` int(5) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `CheckingAccount`
--
ALTER TABLE `CheckingAccount`
  ADD CONSTRAINT `checkingaccount_ibfk_1` FOREIGN KEY (`BankID`) REFERENCES `Bank` (`BankID`),
  ADD CONSTRAINT `checkingaccount_ibfk_2` FOREIGN KEY (`CustomerID`) REFERENCES `Customer` (`CustomerID`);

--
-- Constraints for table `CreditCard`
--
ALTER TABLE `CreditCard`
  ADD CONSTRAINT `creditcard_ibfk_1` FOREIGN KEY (`CustomerID`) REFERENCES `Customer` (`CustomerID`);

--
-- Constraints for table `DebitCard`
--
ALTER TABLE `DebitCard`
  ADD CONSTRAINT `debitcard_ibfk_1` FOREIGN KEY (`CheckingID`) REFERENCES `CheckingAccount` (`CheckingID`),
  ADD CONSTRAINT `debitcard_ibfk_2` FOREIGN KEY (`CustomerID`) REFERENCES `Customer` (`CustomerID`);

--
-- Constraints for table `Deposit`
--
ALTER TABLE `Deposit`
  ADD CONSTRAINT `deposit_ibfk_1` FOREIGN KEY (`CheckingID`) REFERENCES `CheckingAccount` (`CheckingID`),
  ADD CONSTRAINT `deposit_ibfk_2` FOREIGN KEY (`SavingsID`) REFERENCES `SavingsAccount` (`SavingsID`);

--
-- Constraints for table `LoanApp`
--
ALTER TABLE `LoanApp`
  ADD CONSTRAINT `loanapp_ibfk_1` FOREIGN KEY (`CustomerID`) REFERENCES `Customer` (`CustomerID`);

--
-- Constraints for table `SavingsAccount`
--
ALTER TABLE `SavingsAccount`
  ADD CONSTRAINT `savingsaccount_ibfk_1` FOREIGN KEY (`CustomerID`) REFERENCES `Customer` (`CustomerID`),
  ADD CONSTRAINT `savingsaccount_ibfk_2` FOREIGN KEY (`BankID`) REFERENCES `Bank` (`BankID`);

--
-- Constraints for table `Withdraw`
--
ALTER TABLE `Withdraw`
  ADD CONSTRAINT `withdraw_ibfk_1` FOREIGN KEY (`SavingsID`) REFERENCES `SavingsAccount` (`SavingsID`),
  ADD CONSTRAINT `withdraw_ibfk_2` FOREIGN KEY (`CheckingID`) REFERENCES `CheckingAccount` (`CheckingID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
