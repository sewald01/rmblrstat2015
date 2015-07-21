<?php include("header.php") ?>
			<div class="row">
				<div class="col-md-6 col-sm-6">
				<h3>Module 01: Importing Data and Data Manipulation</h3>
				<h4>1.1: Package Installation</h4>
				<p>In order to use RStudio to import data from Excel files, you will first have to install some packages to allow for the manipulation of data. In the Packages tab of RStudio, download and install the "gdata" package by searching for it in the Install dialogue window. It should appear with a checkmark in the packages list after it has finished downloading and installing.
				<p>Repeat this process with the "xlsx" package, and make sure it is checked in the packages list before trying to import data from an Excel document.
				<h4>
				</div>
				<div class="col-md-6 col-sm-6">
					<a href="images/Module01-01importing-data.JPG" target="new_window"><img src="images/Module01-01importing-data.JPG"></a>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-sm-6">
					<h4>1.2 Importing an Excel File by Assigning it a Variable</h4>
					To import an Excel file into RStudio, we will assign it to a variable "moddata" using the "<-" assignment symbol linking to the file directory of the Excel document. The variable will appear in the Environment tab, and will be used to access the data from the document.
					<blockquote>moddata <- read.xlsx("/Users/Sam/Documents/Module 2 data.xlsx" sheetName="Sheet1");</blockquote>
					<p>Alternately, set the file directory to a working directory with "setwd(/Users/Sam/Documents/)" and import with just the Excel file name: moddata <- read.xlsx("Module 2 data.xlsx" sheetName="Sheet1"); 
				</div>
				<div class="col-md-6 col-sm-6">
					<a href="images/Module01-02importing-data.JPG" target="new_window"><img src="images/Module01-02importing-data.JPG"></a>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-sm-6">
					<h4>1.3 Viewing Your Imported Data with Your Variable</h4>
					<p>To view the Excel document data, use the "View()" function with the "moddata" variable:
					<blockquote>View(moddata)</blockquote>
					<p>The "View()" function is case sensitive, and will bring up a table with the data above the Console.
				</div>
				<div class="col-md-6 col-sm-6">
					<a href="images/Module01-03importing-data.JPG" target="new_window"><img src="images/Module01-03importing-data.JPG"></a>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-sm-6">
					<h4>1.4 Data Types</h4>
					<p>When imported into RStudio, your data is assigned a specific type depending on its characteristics. Numeric data includes numbers with decimal places, whereas integer data is made up of whole numbers. Character data can include numbers in addition to letters and punctuation, but is valueless and treated as a string.
				</div>
				<div class="col-md-6 col-sm-6">
					<a href="images/Module01-04manipulating-data.JPG" target="new_window"><img src="images/Module01-04manipulating-data.JPG"></a>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-sm-6">
					<h4>1.5 Table Vectors</h4>
					<p>More often than not, you will be accessing entire columns of data at a time rather than individual data points. Each column is a vector, even if it is made up of character data rather than numeric or integer data.
					<p>To access a single vector, you can assign it to a variable the same way you assigned the Excel data to a variable: with the "<-" assignment symbol followed by the table variable, a "$" symbol, and the name of column you are trying to access.
					<blockquote>samplenumber <- moddata$sample.number</blockquote>
				</div>
				<div class="col-md-6 col-sm-6">
					<a href="images/Module01-05manipulating-data.JPG" target="new_window"><img src="images/Module01-05manipulating-data.JPG"></a>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-sm-6">
					<h4>1.6 Learning About Your Vectors</h4>
					<p>You can also create vectors on the fly by using the concatenate function and assigning it to a variable: 
					<blockquote>vectorexample <- c(1, 2, 3, 4, 5)</blockquote>
					<p>If you want to learn more about a vector that you have assigned to a variable, type that variable name into the console. The console will return to you the data points that are included in that vector, preceded by a value that will tell you how many dimensions of data the vector includes.
				</div>
				<div class="col-md-6 col-sm-6">
					<a href="images/Module01-06manipulating-data.JPG" target="new_window"><img src="images/Module01-06manipulating-data.JPG"></a>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-sm-6">
					<h4>1.7 Data Matrices</h4>
					<p>If you want to create and place more than one vector into a variable, you can create a data table using the matrix() function.
					<blockquote>matrixex <- matrix(c(1, 2, 3, 4, 5, 6), nrow=2, ncol=3, byrow=TRUE)</blockquote>
					<p>Since in order to do so you must supply the data in a single line using the concatenate function, you must also define the number of rows and columns using "nrow" and "ncol", followed by commas between each of the settings. The "byrow" value will allow you to place the data by row first or by column.
				</div>
				<div class="col-md-6 col-sm-6">
					<a href="images/Module01-07manipulating-data.JPG" target="new_window"><img src="images/Module01-07manipulating-data.JPG"></a>
				</div>
			</div>
		</div>
	</body>
</html>
