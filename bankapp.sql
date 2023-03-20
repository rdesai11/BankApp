-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2023 at 04:25 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
-- Table structure for table `bankmanager`
--

CREATE TABLE `bankmanager` (
  `BankID` int(5) NOT NULL,
  `RoutingNum` int(10) NOT NULL,
  `BankName` varchar(30) NOT NULL,
  `BankUser` varchar(15) NOT NULL,
  `BankPass` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `checkingaccount`
--

CREATE TABLE `checkingaccount` (
  `CheckingID` int(5) NOT NULL,
  `AccNum` int(10) NOT NULL,
  `Balance` int(20) NOT NULL,
  `CustomerID` int(5) NOT NULL,
  `BankID` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `creditcard`
--

CREATE TABLE `creditcard` (
  `CreditCardID` int(5) NOT NULL,
  `CreditCardNum` int(16) NOT NULL,
  `CVV` int(3) NOT NULL,
  `IssueDate` date NOT NULL,
  `ExpDate` date NOT NULL,
  `CustomerID` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
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
-- Table structure for table `debitcard`
--

CREATE TABLE `debitcard` (
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
-- Table structure for table `deposit`
--

CREATE TABLE `deposit` (
  `DepositID` int(5) NOT NULL,
  `DepositAmt` int(10) NOT NULL,
  `CheckingID` int(5) NOT NULL,
  `SavingsID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `loanapp`
--

CREATE TABLE `loanapp` (
  `LoanAppID` int(5) NOT NULL,
  `LoanNum` int(10) NOT NULL,
  `LoanAmount` int(10) NOT NULL,
  `LoanType` varchar(25) NOT NULL,
  `CustomerID` int(5) NOT NULL,
  `LoanManID` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `loanmanager`
--

CREATE TABLE `loanmanager` (
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
-- Table structure for table `savingsaccount`
--

CREATE TABLE `savingsaccount` (
  `SavingsID` int(5) NOT NULL,
  `AccNum` int(10) NOT NULL,
  `Balance` int(20) NOT NULL,
  `Interest` int(5) NOT NULL,
  `CustomerID` int(5) NOT NULL,
  `BankID` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `withdraw`
--

CREATE TABLE `withdraw` (
  `WithdrawID` int(5) NOT NULL,
  `WithdrawAmt` int(10) NOT NULL,
  `CheckingID` int(5) NOT NULL,
  `SavingsID` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bankmanager`
--
ALTER TABLE `bankmanager`
  ADD PRIMARY KEY (`BankID`);

--
-- Indexes for table `checkingaccount`
--
ALTER TABLE `checkingaccount`
  ADD PRIMARY KEY (`CheckingID`),
  ADD KEY `CustomerID` (`CustomerID`),
  ADD KEY `BankID` (`BankID`);

--
-- Indexes for table `creditcard`
--
ALTER TABLE `creditcard`
  ADD PRIMARY KEY (`CreditCardID`),
  ADD KEY `CustomerID` (`CustomerID`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`CustomerID`);

--
-- Indexes for table `debitcard`
--
ALTER TABLE `debitcard`
  ADD PRIMARY KEY (`DebitCardID`),
  ADD KEY `CheckingID` (`CheckingID`),
  ADD KEY `CustomerID` (`CustomerID`);

--
-- Indexes for table `deposit`
--
ALTER TABLE `deposit`
  ADD PRIMARY KEY (`DepositID`),
  ADD KEY `SavingsID` (`SavingsID`),
  ADD KEY `CheckingID` (`CheckingID`);

--
-- Indexes for table `loanapp`
--
ALTER TABLE `loanapp`
  ADD PRIMARY KEY (`LoanAppID`),
  ADD KEY `CustomerID` (`CustomerID`),
  ADD KEY `LoanManID` (`LoanManID`);

--
-- Indexes for table `loanmanager`
--
ALTER TABLE `loanmanager`
  ADD PRIMARY KEY (`LoanManID`);

--
-- Indexes for table `savingsaccount`
--
ALTER TABLE `savingsaccount`
  ADD PRIMARY KEY (`SavingsID`),
  ADD KEY `BankID` (`BankID`),
  ADD KEY `CustomerID` (`CustomerID`);

--
-- Indexes for table `withdraw`
--
ALTER TABLE `withdraw`
  ADD PRIMARY KEY (`WithdrawID`),
  ADD KEY `CheckingID` (`CheckingID`),
  ADD KEY `SavingsID` (`SavingsID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bankmanager`
--
ALTER TABLE `bankmanager`
  MODIFY `BankID` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `checkingaccount`
--
ALTER TABLE `checkingaccount`
  MODIFY `CheckingID` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `creditcard`
--
ALTER TABLE `creditcard`
  MODIFY `CreditCardID` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `CustomerID` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `debitcard`
--
ALTER TABLE `debitcard`
  MODIFY `DebitCardID` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `deposit`
--
ALTER TABLE `deposit`
  MODIFY `DepositID` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `loanapp`
--
ALTER TABLE `loanapp`
  MODIFY `LoanAppID` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `loanmanager`
--
ALTER TABLE `loanmanager`
  MODIFY `LoanManID` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `savingsaccount`
--
ALTER TABLE `savingsaccount`
  MODIFY `SavingsID` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `withdraw`
--
ALTER TABLE `withdraw`
  MODIFY `WithdrawID` int(5) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `checkingaccount`
--
ALTER TABLE `checkingaccount`
  ADD CONSTRAINT `checkingaccount_ibfk_1` FOREIGN KEY (`BankID`) REFERENCES `bankmanager` (`BankID`),
  ADD CONSTRAINT `checkingaccount_ibfk_2` FOREIGN KEY (`CustomerID`) REFERENCES `customer` (`CustomerID`);

--
-- Constraints for table `creditcard`
--
ALTER TABLE `creditcard`
  ADD CONSTRAINT `creditcard_ibfk_1` FOREIGN KEY (`CustomerID`) REFERENCES `customer` (`CustomerID`);

--
-- Constraints for table `debitcard`
--
ALTER TABLE `debitcard`
  ADD CONSTRAINT `debitcard_ibfk_1` FOREIGN KEY (`CheckingID`) REFERENCES `checkingaccount` (`CheckingID`),
  ADD CONSTRAINT `debitcard_ibfk_2` FOREIGN KEY (`CustomerID`) REFERENCES `customer` (`CustomerID`);

--
-- Constraints for table `deposit`
--
ALTER TABLE `deposit`
  ADD CONSTRAINT `deposit_ibfk_1` FOREIGN KEY (`CheckingID`) REFERENCES `checkingaccount` (`CheckingID`),
  ADD CONSTRAINT `deposit_ibfk_2` FOREIGN KEY (`SavingsID`) REFERENCES `savingsaccount` (`SavingsID`);

--
-- Constraints for table `loanapp`
--
ALTER TABLE `loanapp`
  ADD CONSTRAINT `loanapp_ibfk_1` FOREIGN KEY (`CustomerID`) REFERENCES `customer` (`CustomerID`),
  ADD CONSTRAINT `loanapp_ibfk_2` FOREIGN KEY (`LoanManID`) REFERENCES `loanmanager` (`LoanManID`);

--
-- Constraints for table `savingsaccount`
--
ALTER TABLE `savingsaccount`
  ADD CONSTRAINT `savingsaccount_ibfk_1` FOREIGN KEY (`CustomerID`) REFERENCES `customer` (`CustomerID`),
  ADD CONSTRAINT `savingsaccount_ibfk_2` FOREIGN KEY (`BankID`) REFERENCES `bankmanager` (`BankID`);

--
-- Constraints for table `withdraw`
--
ALTER TABLE `withdraw`
  ADD CONSTRAINT `withdraw_ibfk_1` FOREIGN KEY (`SavingsID`) REFERENCES `savingsaccount` (`SavingsID`),
  ADD CONSTRAINT `withdraw_ibfk_2` FOREIGN KEY (`CheckingID`) REFERENCES `checkingaccount` (`CheckingID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
