<?php include("header.php") ?>
			<div id="module-zero">
				<div class="row">
					<div class="col-md-6 col-sm-6">
						<h3>Module 0.0: Introduction to R/RStudio</h2>
						<p>R is a programming language used by researchers to easily plot data points and analyze data. RStudio is a graphical user interface (GUI) that utilizes R to display data that has been imported from Excel documents.
						<h3>0.1: Installing R and RStudio</h3>
						<p>
						In order to use RStudio, we must first download and install R. Download R from the Comprehensive R Archive Network (CRAN) at <a href="http://cran.r-project.org" target="new_window">cran.r-project.org</a>. Once R has been installed on your computer, download and install RStudio from their website at <a href="http://www.rstudio.com/products/rstudio" target="new_window">www.rstudio.com/products/rstudio</a>.
						<p>
						Once you have installed both R and RStudio, you are ready to begin. Open RStudio and take a look at the three windows.
					</div>
					<div class="col-md-6 col-sm-6">
						<a href="images/module00rstudio01.JPG" target="new_window"><img src="images/module00rstudio01.JPG"></a>
					</div>
				</div>
			</div>
			<div id="module-one">
				<div class="row">
					<div class="col-md-6 col-sm-6">
					<h3>0.2: Basic Commands in RStudio</h3>
					<p>
					On the left side of the RStudio GUI is the “console” window, where you will input commands using the R language. On the right side of the GUI you will find two windows with several tabs each. Since we won’t be importing files using the “Files” tab yet, select the “Plots” tab in the bottom right window. This is where we will see our first commands from the console displayed in a graph.
					<p>
					Once you have the “Plots” tab selected, return to the console window. Our first command in R will be to plot a simple linear function using the “plot()” command.
					<p>
					In order to use the plot() command to display a graph in RStudio, we will have to specify x and y values within the command. If we wanted to plot a single point on the graph, we could type “plot(x, y)”, where x and y are the numbers for the coordinates we wish to plot.
					<p>
					However, we want to create a linear function to display a range of points on the graph. This can easily be done with the plot() command by inserting a colon (:) between the range of coordinates for the x and y values. In this example, we will plot coordinates at one through five on each axis by typing “plot(1:5, 1:5)” in the command console. Once you submit the command by hitting enter, a graph of the plots will appear in the “Plots” tab.
					</div>
					<div class="col-md-6 col-sm-6">
						<a href="images/module00rstudio02.JPG" target="new_window"><img src="images/module00rstudio02.JPG"></a>
					</div>
				</div>
			</div>
			<div id="module-two">
				<div class="row">
					<div class="col-md-6 col-sm-6">
					
					</div>
					<div class="col-md-6 col-sm-6">
					
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
