<?php include("header.php") ?>
			<div class="row">
				<div class="col-md-6 col-sm-6">
				<h3>Module 2: Describing Data</h3>
				<p>Before running any analyses, you should first get a sense of your data, graphically and numerically. By summarizing your data concisely, you will start to observe trends that will help guide your future analyses. More importantly, your numerical data summaries will be the basis for you to answer questions you originally posed at the beginning of your project. 
				<h3>2.1 What kind of variable do you have?</h3>
				<p>Variables are the characteristic or measurement you have been observing for the past few weeks. Data are the observations you recorded, and this data will either be categorical or numerical, depending on your variable of interest. 
				<p>Categorical variables describe a category or group. Numerical variables describe a quantitative measurement. A variable is either categorical or numerical depending on how you defined it from the beginning of your study.
				</div>
				<div class="col-md-6 col-sm-6">
					<img src="images/adobe-flowers.jpg">
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-sm-6">
				<h3>2.2 Displaying categorical data</h3>
					<p>If you have categorical data, you can use a few possibilities to display your data. The most commonly used with R is the familiar bar graph using the command barplot( ). Be sure to always make your baseline at zero because otherwise you may create a misleading graph. Bars should always stand apart, categories ordered in a natural order, and the total number of observations should be included in the figure legend.
					<a href="images/Module02-03barplot.png"><img src="images/Module02-03barplot.png"></a>
				</div>
				<div class="col-md-6 col-sm-6">
					<a href="images/Module02-04barplotcolor.png"><img src="images/Module02-04barplotcolor.png"></a>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-sm-6">
					<p>More interesting visuals come from associating categorical variables together, and we have a few options for visualizing categorical associations: grouped bar graphs and mosaic plots (often also called the stacked bar graph): 
					<a href="images/Module02-08stackedbarplot.png"><img src="images/Module02-08stackedbarplot.png"></a>
				</div>
				<div class="col-md-6 col-sm-6">
					<a href="images/Module02-07groupedbarplot.png"><img src="images/Module02-07groupedbarplot.png"></a>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-sm-6">
					<h3>2.3 Displaying numerical data</h3>
					<p>If you have numerical data, you will primarily construct a histogram to display your data. In a histogram, you will “bin” your data, creating consecutive intervals of equal width to divide your data into an easily visualized form. How wide should your bins be? It depends on what you think best represents your data, and you can easily alter your bin sizes in R to best represent your data. 
					<p>You can also use a cumulative frequency distribution to show a running total of your observations. While it may not be helpful for displaying a single numerical variable, it can come in handy when comparing groups. 
					<p>Again the more interesting visuals come from associating numerical variables together, and you have a few options for visualizing numerical associations. If you want to display differences among groups, you can stack your histograms or group your cumulative frequency distributions together. 
				</div>
				<div class="col-md-6 col-sm-6">
					<a href="images/Module02-05plot.png"><img src="images/Module02-05plot.png"></a>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-sm-6">
					<p>To associate two numerical variables, use a scatter plot which is simply plot (variable, variable) in R. If you want to display a trend in time, then use a line graph with time on the x-axis using the plot ( ) function. In this case, time would simply be your x-variable. There is also a spatial equivalent of a line graph, or a map, which displays the numerical values associated with multiple locations. But ARCGIS would probably be a better software option for creating maps. 
					<p>And remember that regardless the display, you want to show your data on your plots, represent values accurately, and clearly define axes. Make your plots easy for your intended audience to interpret. 
				</div>
				<div class="col-md-6 col-sm-6">
					<a href="images/Module02-06scatterplot.png"><img src="images/Module02-06scatterplot.png"></a>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-sm-6">
					<h3>2.4 Describing categorical data</h3>
					<p>The major descriptive statistic for categorical data is the proportion or simply the number of observations in a category divided by the total number of observations.
					<p>$\hat{p}=\frac{number\ of\ observations\ in\ category}{total\ number\ of\ observations}$
					<p>After calculating proportions for all your categories, you will be ready to start analyzing your data as shown in Module 3.
				</div>
				<div class="col-md-6 col-sm-6">
					<a href="images/Module02-09proptable.png"><img src="images/Module02-09proptable.png"></a>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-sm-6">
					<h3>2.5 Describing numerical data</h3>
					<p>Numerical data has a bit more character which naturally lends itself to data summaries of its center and spread. 
					<h4>Measures of center: mean and median</h4>
					<p>The sample mean is average of the measurements in the sample while the median is the very middle measurement itself when the observations are ordered. Which measure you choose to use to summarize your data depends on the data itself. If you have extreme values in your data, you should use the median because the median is not affected by extreme values while the mean is affected. 
				</div>
				<div class="col-md-6 col-sm-6">
					<a href="images/Module02-11median.png"><img src="images/Module02-11median.png"></a>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-sm-6">
					<h4>Measures of spread:</h4>
					<p>Like the measure of center, there are two measures of spread—the standard deviation and the interquartile range. The standard deviation measures how far from the mean observations typically are while the interquartile range measures the difference between the first and third quartiles of data. (You can calculate the quartiles based on ordering your data points. The first quartile is the observation at the first quarter of your ordered data while the third quartile is the observation at the third quarter of your ordered data.)
					<p>And again like the mean, the standard deviation is highly sensitive to extreme values so you should use the interquartile 				
				</div>
				<div class="col-md-6 col-sm-6">
					<a href="images/Module02-13iqr.png"><img src="images/Module02-13iqr.png"></a>
				</div>
			</div>
		</div>
	</body>
</html>
