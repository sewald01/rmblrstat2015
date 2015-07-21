<?php include("header.php") ?>
			<div class="row">
				<div class="col-md-6 col-sm-6">
					<h3>Module 9: Examples of Hypothesis Testing for ANOVAs, Correlations and Regressions</h3>
					
				</div>
				<div class="col-md-6 col-sm-6">
				
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-sm-6">
					<h3>Example 1: Effect of Neonicotinoid Pesticides on Bumblebee Colony Queen Production</h3>
					<h4>Question:</h4>
					<p>Do pesticides affect queen production in bumble bee colonies?
					<h4>The Setup:</h4>
					<ul class="normal">
						<li>Rear <span class="italic">Bombus terrestris</span> colonies in the lab
						<li>Three treatments:
							<ul class="square">
								<li>Control
								<li>Low pesticide exposure
								<li>High pesticide exposure
							</ul>
						<li>Measure colony characteristics:
							<ul class="square">
								<li>Colony mass through time
								<li># of workers left at end
								<li># of males and queens produced
								<li>etc.
							</ul>
					</ul>
				</div>
				<div class="col-md-6 col-sm-6">
					<img src="images/module09example1image.png">
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-sm-6">
					<h4>The Data:</h4>
					<p>Download the data file: <a href="data/neonicotinoids.xlsx">neonicotinoids.xlsx</a>
					<a href="images/new-queens-treatment.jpg" target="new_window"><img src="images/new-queens-treatment.jpg"></a>
					<p>Table 1: Subset for the data file showing only two columns
				</div>
				<div class="col-md-6 col-sm-6">
					<h4>Number of Queens Produced vs. Treatment Type:</h4>
					<a href="images/module09example1plot.png" target="new_window"><img src="images/module09example1plot.png"></a>
					<p>Figure 1: Box plots of neonicotinoids data. Number of queens produced as a function of treatment.
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-sm-6">
					<h4>Hypotheses:</h4>
					<p><a href="#answer1" class="questions">Q1: What is the null hypothesis? (click for answer)</a>
					<blockquote class="block-hint">
						<p><a href="#hint1" class="questions">(Show Hint)</a>
						<p class="answers" id="hint1">Hint: Use the question to formulate the null hypothesis in terms of the data.</p>
					</blockquote>
					<p class="answers" id="answer1">A1: H<sub>O</sub> = There is no difference in the number of queens produced between the three treatments.</p>
					<p><a href="#answer2" class="questions">Q2: What is the alternate hypothesis? (click for answer)</a>
					<blockquote class="block-hint">
						<p><a href="#hint2" class="questions">(Show Hint)</a>
						<p class="answers" id="hint2">Hint: The alternate hypothesis should state the opposite of the null hypothesis.</p>
					</blockquote>
					<p class="answers" id="answer2">A2: H<sub>A</sub> = There is at least one difference in the number of queens produced between the three treatments.</p>
				</div>
				<div class="col-md-6 col-sm-6">
				
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-sm-6">
					<h4>The Statistical Test:</h4>
					<p><a href="#answer3" class="questions">Q3: Which test or method do we use? (click for answer)</a>
					<blockquote class="block-hint">
						<p><a href="#hint4" class="questions">(Hint: What data is available and what kind of data is it?)</a>
						<p class="answers" id="hint4">Number of queens produced (numerical) + treatment type (categorical).</p>
						<p><a href="#hint5" class="questions">(Hint: What do you want to do with the mean number of queens produced for each treatment?)</a>
						<p class="answers" id="hint5">Compare averages to see if there are statistically significant differences between treatments.</p>
					</blockquote>
					<p class="answers" id="answer3">A3: Analysis of variance (one-way ANOVA).</p>
				</div>
				<div class="col-md-6 col-sm-6">
				
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-sm-6">
					<h4>The R Code:</h4>

					<p>my.anova: variable to hold analysis results
					<p>aov() function: performs the analysis of variance
					<p>depVar: numeric dependent variable
					<p>indepVar: categorical independent variable
					<p>summary() function: displays results of the test
					<p>TukeyHSD() function: calculates and displays the difference in means between all groups and associated p-values	
				</div>
				<div class="col-md-6 col-sm-6">
					<div style="overflow:auto;"><div class="geshifilter"><pre class="r geshifilter-R" style="font-family:monospace;">my.anova <span style="">&lt;-</span> <a href="http://inside-r.org/r-doc/stats/aov"><span style="color: #003399; font-weight: bold;">aov</span></a><span style="color: #009900;">&#40;</span>depVar <span style="">~</span> indepVar<span style="color: #009900;">&#41;</span><span style="color: #339933;">;</span>
<a href="http://inside-r.org/r-doc/base/summary"><span style="color: #003399; font-weight: bold;">summary</span></a><span style="color: #009900;">&#40;</span>my.anova<span style="color: #009900;">&#41;</span><span style="color: #339933;">;</span>
<a href="http://inside-r.org/r-doc/stats/TukeyHSD"><span style="color: #003399; font-weight: bold;">TukeyHSD</span></a><span style="color: #009900;">&#40;</span>my.anova<span style="color: #009900;">&#41;</span><span style="color: #339933;">;</span></pre></div></div>			
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-sm-6">
					<h4>The Full R Script:</h4>
					<div style="overflow:auto;"><div class="geshifilter"><pre class="r geshifilter-R" style="font-family:monospace;"><span style="color: #666666; font-style: italic;">## Set working directory, load libraries, import data</span>
<a href="http://inside-r.org/r-doc/base/setwd"><span style="color: #003399; font-weight: bold;">setwd</span></a><span style="color: #009900;">&#40;</span>“……<span style="color: #0000ff;">&quot;);
library(&quot;</span><a href="http://inside-r.org/packages/cran/xlsx"><span style="">xlsx</span></a><span style="color: #0000ff;">&quot;);
bumblebees &lt;- read.xlsx(&quot;</span>neonicotinoids.xlsx<span style="color: #0000ff;">&quot;,1);
&nbsp;
## Analysis of Variance
bumblebees.test &lt;- aov(bumblebees$New.queens ~ bumblebees$Treatment);
summary(bumblebees.test);
&nbsp;
## Tukey HSD test of differences between means
TukeyHSD(bumblebees.test);</span></pre></div></div>
				</div>
				<div class="col-md-6 col-sm-6">
					<h4>R Output:</h4>
					<div style="overflow:auto;"><div class="geshifilter"><pre class="r geshifilter-R" style="font-family:monospace;">                     Df Sum Sq Mean Sq F value Pr<span style="color: #009900;">&#40;</span><span style="">&gt;</span>F<span style="color: #009900;">&#41;</span>  
bumblebees<span style="">$</span>Treatment  <span style="color: #cc66cc;">2</span>   <span style="color: #cc66cc;">2413</span>  <span style="color: #cc66cc;">1206.3</span>   <span style="color: #cc66cc;">4.255</span> <span style="color: #cc66cc;">0.0179</span> <span style="">*</span>
Residuals            <span style="color: #cc66cc;">72</span>  <span style="color: #cc66cc;">20413</span>   <span style="color: #cc66cc;">283.5</span>    
 Tukey multiple comparisons of means
    <span style="color: #cc66cc;">95</span>% family<span style="">-</span>wise confidence level
Fit<span style="">:</span> <a href="http://inside-r.org/r-doc/stats/aov"><span style="color: #003399; font-weight: bold;">aov</span></a><span style="color: #009900;">&#40;</span><a href="http://inside-r.org/r-doc/stats/formula"><span style="color: #003399; font-weight: bold;">formula</span></a> = bumblebees<span style="">$</span>New.queens <span style="">~</span> bumblebees<span style="">$</span>Treatment<span style="color: #009900;">&#41;</span>
<span style="">$</span><span style="color: #0000ff;">`bumblebees$Treatment`</span>
               <a href="http://inside-r.org/r-doc/base/diff"><span style="color: #003399; font-weight: bold;">diff</span></a>       lwr        upr     p adj
High<span style="">-</span><a href="http://inside-r.org/r-doc/base/Control"><span style="color: #003399; font-weight: bold;">Control</span></a> <span style="">-</span><span style="color: #cc66cc;">12.32</span> <span style="">-</span><span style="color: #cc66cc;">23.71719</span> <span style="">-</span><span style="color: #cc66cc;">0.9228106</span> <span style="color: #cc66cc;">0.0310591</span>
Low<span style="">-</span><a href="http://inside-r.org/r-doc/base/Control"><span style="color: #003399; font-weight: bold;">Control</span></a>  <span style="">-</span><span style="color: #cc66cc;">11.72</span> <span style="">-</span><span style="color: #cc66cc;">23.11719</span> <span style="">-</span><span style="color: #cc66cc;">0.3228106</span> <span style="color: #cc66cc;">0.0424716</span>
Low<span style="">-</span>High       <span style="color: #cc66cc;">0.60</span> <span style="">-</span><span style="color: #cc66cc;">10.79719</span> <span style="color: #cc66cc;">11.9971894</span> <span style="color: #cc66cc;">0.9912887</span>             </pre></div></div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-sm-6">
					<h4>Results:</h4>
					<p>ANOVA p-value = 0.0179
					<p><a href="#answer4" class="questions">Q4: Since the p-value is less than 0.05, do you or do you not reject the null hypothesis? (click for answer)</a>
					<p class="answers" id="answer4">A4: Reject the null hypothesis. Therefore, there is evidence to support the alterative hypothesis.</p>
					<p><a href="#answer5" class="questions">Q5: What is the answer to the question: Do pesticides affect queen production in bumble bee colonies? (click for answer)</a>
					<p class="answers" id="answer5">A5: Yes, pesticides do affect queen production in bumble bee colonies.</p>
					<p><a href="#answer6" class="questions">Q6: Using the Tukey HSD results, between which treatments are there significant differences? (click for answer)</a>
					<blockquote class="block-hint">
						<p><a href="#hint6" class="questions">(Show Hint)</a>
						<p class="answers" id="hint6">Hint: Look at the adjusted p-value for each comparison.</p>
					</blockquote>
					<p class="answers" id="answer6">A6: There is a significant difference between the control and high treatments and between the control and low treatments.</p>
				</div>
				<div class="col-md-6 col-sm-6">
				
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-sm-6">
					<h3>Example 2: Effect of a Dam on Sturgeon</h3>
					<h4>Question:</h4>
					<p>Does a dam have an effect on sturgeon?
					<h4>The Setup:</h4>
					<ul class="normal">
						<li>Dam built on the Saskatchewan (Canada)
						<li>Two sites:
							<ul class="square">
								<li>The Pas (above the dam)
								<li>Cumberland House (below the dam)
							</ul>
						<li>Measure sturgeon characteristics:
							<ul class="square">
								<li>Fork length
								<li>Weight
								<li>Age
								<li>Sex
							</ul>
					</ul>
				</div>
				<div class="col-md-6 col-sm-6">
					<img src="images/module09example2image.jpg">
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-sm-6">
					<h4>The Data:</h4>
					<p>Download the data file: <a href="data/sturgeon.xlsx">sturgeon.xlsx</a>
					<a href="images/sturgeon-loct.jpg" target="new_window"><img src="images/sturgeon-loct.jpg"></a>
					<p>Table 1: Subset for the data file showing only two columns
				</div>
				<div class="col-md-6 col-sm-6">
					<h4>Average Fork Length vs. Site:</h4>
					<a href="images/module09example2plot.png" target="new_window"><img src="images/module09example2plot.png"></a>
					<p>Figure 1: Box plots of sturgeon data. Average fork length as a function of the site.
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-sm-6">
					<h4>Hypotheses:</h4>
					<p><a href="#answer7" class="questions">Q7: What is the null hypothesis? (click for answer)</a>
					<blockquote class="block-hint">
						<p><a href="#hint7" class="questions">(Show Hint)</a>
						<p class="answers" id="hint7">Hint: Use the question to formulate the null hypothesis in terms of the data.</p>
					</blockquote>
					<p class="answers" id="answer7">A7: H<sub>O</sub> = There is no difference in the mean fork length between the fish at either site.</p>
					<p><a href="#answer8" class="questions">Q8: What is the alternative hypothesis? (click for answer)</a>
					<blockquote class="block-hint">
						<p><a href="#hint8" class="questions">(Show Hint)</a>
						<p class="answers" id="hint8">Hint: The alternative hypothesis should state the opposite of the null hypothesis.</p>
					</blockquote>
					<p class="answers" id="answer7">A7: H<sub>A</sub> = There is a difference in the mean fork length between the fish at either site.</p>
				</div>
				<div class="col-md-6 col-sm-6">
				
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-sm-6">
					<h4>The Statistical Test:</h4>
					<p><a href="#answer8" class="questions">Q8: Which test or method do we use? (click for answer)</a>
					<blockquote class="block-hint">
						<p><a href="#hint9" class="questions">(Hint: What data is available and what kind of data is it?)</a>
						<p class="answers" id="hint9">Fork length (numerical) + site (categorical).</p>
						<p><a href="#hint10" class="questions">(Hint: What do you want to do with the mean fork length for each site?)</a>
						<p class="answers" id="hint10">Compare means to see if there are statistically significant differences between sites.</p>
					</blockquote>
					<p class="answers" id="answer8">A8: Student's T-test.</p>
				</div>
				<div class="col-md-6 col-sm-6">
				
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-sm-6">
					<h4>The R Code:</h4>
					<p>depVar: numeric dependent variable
					<p>indepVar: categorical independent variable
				</div>
				<div class="col-md-6 col-sm-6">
					<div style="overflow:auto;"><div class="geshifilter"><pre class="r geshifilter-R" style="font-family:monospace;"><a href="http://inside-r.org/r-doc/stats/t.test"><span style="color: #003399; font-weight: bold;">t.test</span></a><span style="color: #009900;">&#40;</span>depVar <span style="">~</span> indepVar<span style="color: #009900;">&#41;</span><span style="color: #339933;">;</span> </pre></div></div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-sm-6">
					<h4>The Full R Script:</h4>
						<div style="overflow:auto;"><div class="geshifilter"><pre class="r geshifilter-R" style="font-family:monospace;"><span style="color: #666666; font-style: italic;">## Set working directory, load libraries, import data</span>
<a href="http://inside-r.org/r-doc/base/setwd"><span style="color: #003399; font-weight: bold;">setwd</span></a><span style="color: #009900;">&#40;</span>“……”<span style="color: #009900;">&#41;</span><span style="color: #339933;">;</span>
<a href="http://inside-r.org/r-doc/base/library"><span style="color: #003399; font-weight: bold;">library</span></a><span style="color: #009900;">&#40;</span><span style="color: #0000ff;">&quot;xlsx&quot;</span><span style="color: #009900;">&#41;</span><span style="color: #339933;">;</span>
sturgeon <span style="">&lt;-</span> read.xlsx<span style="color: #009900;">&#40;</span><span style="color: #0000ff;">&quot;sturgeon.xlsx&quot;</span><span style="color: #339933;">,</span><span style="color: #cc66cc;">1</span><span style="color: #009900;">&#41;</span><span style="color: #339933;">;</span>
&nbsp;
<span style="color: #666666; font-style: italic;">## Student t-test</span>
<a href="http://inside-r.org/r-doc/stats/t.test"><span style="color: #003399; font-weight: bold;">t.test</span></a><span style="color: #009900;">&#40;</span>sturgeon<span style="">$</span>fklngth <span style="">~</span> sturgeon<span style="">$</span>location<span style="color: #009900;">&#41;</span><span style="color: #339933;">;</span></pre></div></div>
				</div>
				<div class="col-md-6 col-sm-6">
					<h4>R Output:</h4>
					<div style="overflow:auto;"><div class="geshifilter"><pre class="r geshifilter-R" style="font-family:monospace;">   Welch Two Sample t<span style="">-</span>test
&nbsp;
<a href="http://inside-r.org/r-doc/utils/data"><span style="color: #003399; font-weight: bold;">data</span></a><span style="">:</span>  sturgeon<span style="">$</span>fklngth <a href="http://inside-r.org/r-doc/base/by"><span style="color: #003399; font-weight: bold;">by</span></a> sturgeon<span style="">$</span>location
<a href="http://inside-r.org/r-doc/base/t"><span style="color: #003399; font-weight: bold;">t</span></a> = <span style="color: #cc66cc;">2.2201</span><span style="color: #339933;">,</span> <a href="http://inside-r.org/r-doc/stats/df"><span style="color: #003399; font-weight: bold;">df</span></a> = <span style="color: #cc66cc;">169.8</span><span style="color: #339933;">,</span> p<span style="">-</span>value = <span style="color: #cc66cc;">0.02774</span>
alternative hypothesis<span style="">:</span> true difference <span style="color: #000000; font-weight: bold;">in</span> means <a href="http://inside-r.org/r-doc/methods/is"><span style="color: #003399; font-weight: bold;">is</span></a> not equal to <span style="color: #cc66cc;">0</span>
<span style="color: #cc66cc;">95</span> percent confidence <a href="http://inside-r.org/packages/cran/interval"><span style="">interval</span></a><span style="">:</span>
 <span style="color: #cc66cc;">0.1900117</span> <span style="color: #cc66cc;">3.2390804</span>
<a href="http://inside-r.org/r-doc/base/sample"><span style="color: #003399; font-weight: bold;">sample</span></a> estimates<span style="">:</span>
<a href="http://inside-r.org/r-doc/base/mean"><span style="color: #003399; font-weight: bold;">mean</span></a> <span style="color: #000000; font-weight: bold;">in</span> <a href="http://inside-r.org/r-doc/grDevices/group"><span style="color: #003399; font-weight: bold;">group</span></a> CUMBERLAND    <a href="http://inside-r.org/r-doc/base/mean"><span style="color: #003399; font-weight: bold;">mean</span></a> <span style="color: #000000; font-weight: bold;">in</span> <a href="http://inside-r.org/r-doc/grDevices/group"><span style="color: #003399; font-weight: bold;">group</span></a> THE_PAS 
                <span style="color: #cc66cc;">45.08439</span>                 <span style="color: #cc66cc;">43.36984</span></pre></div></div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-sm-6">
					<h4>Results:</h4>
					<p>T-test p-value = 0.0179
					<p><a href="#answer9" class="questions">Q9: Since the p-value is less than 0.05, do you or do you not reject the null hypothesis? (click for answer)</a>
					<p class="answers" id="answer9">A9: Reject the null hypothesis. Therefore, there is evidence to support the alterative hypothesis.</p>
					<p><a href="#answer10" class="questions">Q10: What is the answer to the question: Does a dam have an effect on sturgeon? (click for answer)</a>
					<p class="answers" id="answer10">A10: Yes, the construction of a dam does affect sturgeon.</p>
				</div>
				<div class="col-md-6 col-sm-6">
				
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-sm-6">
					<h4>Test of Assumptions:</h4>
					<p>This Student’s T-test on the sturgeon data was done without testing that the assumptions of the test are met. If the assumptions are violated, the ability of the test to detect an effect are hindered and may produce a false-positive or a false-negative.
					<p>Let’s visually test the assumptions that the residuals are normally distributed and are homoscedastic. Start by generating a linear model and displaying the diagnostic plots:
					<div style="overflow:auto;"><div class="geshifilter"><pre class="r geshifilter-R" style="font-family:monospace;">model <span style="">&lt;-</span> <a href="http://inside-r.org/r-doc/stats/lm"><span style="color: #003399; font-weight: bold;">lm</span></a><span style="color: #009900;">&#40;</span>fklngth <span style="">~</span> location<span style="color: #339933;">,</span> <a href="http://inside-r.org/r-doc/utils/data"><span style="color: #003399; font-weight: bold;">data</span></a>=sturgeon<span style="color: #009900;">&#41;</span><span style="color: #339933;">;</span>
<a href="http://inside-r.org/r-doc/graphics/plot"><span style="color: #003399; font-weight: bold;">plot</span></a><span style="color: #009900;">&#40;</span>model<span style="color: #009900;">&#41;</span><span style="color: #339933;">;</span></pre></div></div>
					<p>In the console, you’ll be prompted to hit ‘Enter’ to view each of the diagnostic plots. You can skip the first plot (Residuals vs Fitted). 
				</div>
				<div class="col-md-6 col-sm-6">
				
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-sm-6">
					<p>The second plot (Normal QQ), displays two probability distributions by plotting their quantiles against each other. The residuals of the linear model are used to generate the quantiles. The line in the plot is the y = x line. Notice that many of the plots fall on the y = x line and form a dark band. This is a good thing! It indicates that the data is likely normally distributed.
					<p>However, note that some of the points at the margins of the plot do not fall on the y = x line. These points indicate that the data may not actually be normally distributed.
					<p>The third plot (Scale-Location), displays the ‘spread’ of the residuals. Since there are two sites, there appear to be two columns. The red line is a ‘line of best fit’ through the residuals. We will use this plot to see if the residuals are homoscedastic (the variation is constant throughout the data). Ideally the red line would be perfectly flat and horizontal, indicating that the residuals are homoscedastic. Since the red line in this plot is not horizontal, we ma suspect that the residuals are not homoscedastic.
					<p>Using these plots, we can see that two assumptions (normality and homoscedasticity of the residuals) may be violated. We can do formal statistical tests to confirm or reject these conclusions:
					<div style="overflow:auto;"><div class="geshifilter"><pre class="r geshifilter-R" style="font-family:monospace;"><span style="color: #666666; font-style: italic;">## Shapiro-Wilk test for normality</span>
<a href="http://inside-r.org/r-doc/stats/shapiro.test"><span style="color: #003399; font-weight: bold;">shapiro.test</span></a><span style="color: #009900;">&#40;</span><a href="http://inside-r.org/r-doc/stats/residuals"><span style="color: #003399; font-weight: bold;">residuals</span></a><span style="color: #009900;">&#40;</span>model<span style="color: #009900;">&#41;</span><span style="color: #009900;">&#41;</span><span style="color: #339933;">;</span>
&nbsp;
Shapiro<span style="">-</span>Wilk normality test
&nbsp;
<a href="http://inside-r.org/r-doc/utils/data"><span style="color: #003399; font-weight: bold;">data</span></a><span style="">:</span>  <a href="http://inside-r.org/r-doc/stats/residuals"><span style="color: #003399; font-weight: bold;">residuals</span></a><span style="color: #009900;">&#40;</span>model<span style="color: #009900;">&#41;</span>
W = <span style="color: #cc66cc;">0.97469</span><span style="color: #339933;">,</span> p<span style="">-</span>value = <span style="color: #cc66cc;">0.001857</span></pre></div></div>
					<p>The null hypothesis for the Shapiro-Wilk test for normality is that the residuals are normally distributed. Since the test produces a p-value < 0.05, we reject the null hypothesis and conclude that the residuals are not normally distributed.
					<div style="overflow:auto;"><div class="geshifilter"><pre class="r geshifilter-R" style="font-family:monospace;"><span style="color: #666666; font-style: italic;">## Check homoscedasticity of residuals (Breusch-Pagan) </span>
<a href="http://inside-r.org/r-doc/base/library"><span style="color: #003399; font-weight: bold;">library</span></a><span style="color: #009900;">&#40;</span><span style="color: #0000ff;">&quot;lmtest&quot;</span><span style="color: #009900;">&#41;</span><span style="color: #339933;">;</span> <span style="color: #666666; font-style: italic;">## BP test is a part of the lmtest library</span>
bptest<span style="color: #009900;">&#40;</span>model<span style="color: #339933;">,</span> varformula = <span style="">~</span><a href="http://inside-r.org/r-doc/stats/fitted.values"><span style="color: #003399; font-weight: bold;">fitted.values</span></a><span style="color: #009900;">&#40;</span>model<span style="color: #009900;">&#41;</span><span style="color: #339933;">,</span> studentize = <span style="color: #000000; font-weight: bold;">TRUE</span><span style="color: #009900;">&#41;</span><span style="color: #339933;">;</span>
&nbsp;
	studentized Breusch<span style="">-</span>Pagan test
&nbsp;
<a href="http://inside-r.org/r-doc/utils/data"><span style="color: #003399; font-weight: bold;">data</span></a><span style="">:</span>  model
BP = <span style="color: #cc66cc;">8.8015</span><span style="color: #339933;">,</span> <a href="http://inside-r.org/r-doc/stats/df"><span style="color: #003399; font-weight: bold;">df</span></a> = <span style="color: #cc66cc;">1</span><span style="color: #339933;">,</span> p<span style="">-</span>value = <span style="color: #cc66cc;">0.00301</span></pre></div></div>
					<p>The null hypothesis for the Breusch-Pagan test for homoscedasticity is that the residuals are homoscedastic. Since the test produces a p-value < 0.05, we reject the null hypothesis and conclude that the residuals are not homoscedastic.
					<p>Since both a visual basement and a formal test of the assumptions leads us to conclude that the assumptions of the Student’s T-test are not met, we have reason to worry that the test may not be able to detect an effect. Therefore, we can employ another test that is more robust to the violation of these assumptions: Mann-Whitney U test
				</div>
				<div class="col-md-6 col-sm-6">
				
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-sm-6">
					<h4>The Mann-Whitney U Test</h4>
					<p>The Mann-Whitney U test works the same way as the Student’s T-test but is more robust to the violation of the assumptions that the residuals are normally distributed and homoscedastic. Note that in R, the test is called the Wilcox test:					
				</div>
				<div class="col-md-6 col-sm-6">
					<div style="overflow:auto;"><div class="geshifilter"><pre class="r geshifilter-R" style="font-family:monospace;"><a href="http://inside-r.org/r-doc/stats/wilcox.test"><span style="color: #003399; font-weight: bold;">wilcox.test</span></a><span style="color: #009900;">&#40;</span>depVar <span style="">~</span> indepVar<span style="color: #009900;">&#41;</span> </pre></div></div>
					<p>depVar is the numeric dependent variable
					<p>indepVar is the categorical independent variable
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-sm-6">
					<h4>The Full R Script</h4>
					<div style="overflow:auto;"><div class="geshifilter"><pre class="r geshifilter-R" style="font-family:monospace;"><span style="color: #666666; font-style: italic;">## Set working directory, load libraries, import data</span>
<a href="http://inside-r.org/r-doc/base/setwd"><span style="color: #003399; font-weight: bold;">setwd</span></a><span style="color: #009900;">&#40;</span>“……”<span style="color: #009900;">&#41;</span><span style="color: #339933;">;</span>
<a href="http://inside-r.org/r-doc/base/library"><span style="color: #003399; font-weight: bold;">library</span></a><span style="color: #009900;">&#40;</span><span style="color: #0000ff;">&quot;xlsx&quot;</span><span style="color: #009900;">&#41;</span><span style="color: #339933;">;</span>
sturgeon <span style="">&lt;-</span> read.xlsx<span style="color: #009900;">&#40;</span><span style="color: #0000ff;">&quot;sturgeon.xlsx&quot;</span><span style="color: #339933;">,</span><span style="color: #cc66cc;">1</span><span style="color: #009900;">&#41;</span><span style="color: #339933;">;</span>
&nbsp;
<span style="color: #666666; font-style: italic;">## Mann-Whitney U test (aka Wilcox)</span>
<a href="http://inside-r.org/r-doc/stats/wilcox.test"><span style="color: #003399; font-weight: bold;">wilcox.test</span></a><span style="color: #009900;">&#40;</span>sturgeon<span style="">$</span>fklngth <span style="">~</span> sturgeon<span style="">$</span>location<span style="color: #009900;">&#41;</span><span style="color: #339933;">;</span></pre></div></div>
				</div>
				<div class="col-md-6 col-sm-6">
					<h4>R Output</h4>
					<div style="overflow:auto;"><div class="geshifilter"><pre class="r geshifilter-R" style="font-family:monospace;">	Wilcoxon <a href="http://inside-r.org/r-doc/base/rank"><span style="color: #003399; font-weight: bold;">rank</span></a> <a href="http://inside-r.org/r-doc/base/sum"><span style="color: #003399; font-weight: bold;">sum</span></a> test <a href="http://inside-r.org/r-doc/base/with"><span style="color: #003399; font-weight: bold;">with</span></a> continuity correction
&nbsp;
<a href="http://inside-r.org/r-doc/utils/data"><span style="color: #003399; font-weight: bold;">data</span></a><span style="">:</span>  sturgeon<span style="">$</span>fklngth <a href="http://inside-r.org/r-doc/base/by"><span style="color: #003399; font-weight: bold;">by</span></a> sturgeon<span style="">$</span>location
W = <span style="color: #cc66cc;">4973</span><span style="color: #339933;">,</span> p<span style="">-</span>value = <span style="color: #cc66cc;">0.06296</span>
alternative hypothesis<span style="">:</span> true location shift <a href="http://inside-r.org/r-doc/methods/is"><span style="color: #003399; font-weight: bold;">is</span></a> not equal to <span style="color: #cc66cc;">0</span></pre></div></div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-sm-6">
					<h4>Results:</h4>
					<p>T-test p-value = 0.06296
					<p><a href="#answer11" class="questions">Q11: Since the p-value is greater than 0.05, do you or do you not reject the null hypothesis? (click for answer)</a>
					<p class="answers" id="answer11">A11: Do not reject the null hypothesis. Therefore, there is not enough evidence to support the alterative hypothesis.</p>
					<p><a href="#answer12" class="questions">Q12: What is the answer to the question: Does a dam have an effect on sturgeon? (click for answer)</a>
					<p class="answers" id="answer12">A12: No, the construction of a dam does not affect sturgeon.</p>
					<p>Notice that the original Student’s T-test provided a different result and led us to a different conclusion. It’s important to note that different tests use different methods to determine a statistical conclusion. Each one has different strengths and weaknesses and choosing which test to use depends on the quality of the data (does it meet or violate the assumptions of different tests).
					<p>It’s also important to note that the tests of assumptions are extremely sensitive (more so with larger datasets). Therefore, they may detect a lack of homoscedasticity or normality but these violations are very small and the typical tests one would use are capable of dealing with these minute violations.
					<p>Additionally, note that the non-parametric tests one would use when data violates assumptions are not as powerful as the typical test one would use. Therefore, as an investigator you must decide which test you want to perform by choosing to work with small violations of assumptions or with a weaker test.
				</div>
				<div class="col-md-6 col-sm-6">
				
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-sm-6">
					<h3>Example 3: Effects of Fire and Fertilization on a Plant Community</h3>
					<h4>Question:</h4>
					<p>Does fire and/or fertilization affect species richness?
					<h4>The Setup:</h4>
					<ul class="normal">
						<li>Factorial design on grassland plots
						<li>Two treatments: fertilization + prescribed burns
						<li>Measured species richness 6 months after treatment
					</ul>
					<h4>The Data:</h4>
					<p>Download the data file: <a href="data/species_richness.xlsx">species_richness.xlsx</a>
				</div>
				<div class="col-md-6 col-sm-6">
					<img src="images/module09example3image.jpg">
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-sm-6">
					<a href="images/fertilized-richness.jpg" target="new_window"><img src="images/fertilized-richness.jpg"></a>
					<p>Table 3: Subset for the data file.
				</div>
				<div class="col-md-6 col-sm-6">
					<h4>Average Species Richness vs. Treatment Type</h4>
					<a href="images/module09example3plot.png" target="new_window"><img src="images/module09example3plot.png"></a>
					<p>Figure 3: Box plots of species richness data. Average species richness by fire & fertilization treatment.
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-sm-6">
					<h4>Hypotheses</h4>
					<p><a href="#answer13" class="questions">Q13: What is the null hypothesis? Note: there are more than one null hypotheses. (click for answer)</a>
					<blockquote class="block-hint">
						<p><a href="#hint11" class="questions">(Show Hint)</a>
						<p class="answers" id="hint11">Hint: use the question to formulate the null hypothesis in terms of the data.</p>
						<p><a href="#hint12" class="questions">(Show Hint)</a>
						<p class="answers" id="hint12">Hint: formulate null hypotheses related to each treatment and any possible interaction between treatments.</p>
					</blockquote>
					<span class="answers" id="answer13">
					<p>A13: H<sub>O1</sub> = There are no significant differences in the species richness of plots exposed to periodic fire.</p>
					<p>A13: H<sub>O2</sub> = There are no significant differences in the species richness of fertilized plots.</p>
					<p>A13: H<sub>O3</sub> = There are no effects of interactions between fertilization and fire on species richness.</p>
					</span>
					<p><a href="#answer14" class="questions">Q14: What is the alternative hypothesis? Note: there are more than one alternative hypotheses. (click for answer)</a>
					
					<blockquote class="block-hint">
						<p><a href="#hint13" class="questions">(Show Hint)</a>
						<p class="answers" id="hint13">Hint: The alternative hypotheses should state the opposite of the null hypotheses.</p>
					</blockquote>
					<span class="answers" id="answer14">
					<p>A14: H<sub>A1</sub> = There is at least one significant difference in the species richness of plots exposed to period fire.</p>
					<p>A14: H<sub>A2</sub> = There is at least one significant difference in the species richness of fertilized plots.</p>
					<p>A14: H<sub>A3</sub> = There is an effect of the interaction between fertilization and fire on species richness.</p>
					</span>
				</div>
				<div class="col-md-6 col-sm-6">
					
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-sm-6">
					<h4>The Statistical Test:</h4>
					<p><a href="#answer15" class="questions">Q15: Which test or method do we use? (click for answer)</a>
					<blockquote class="block-hint">
						<p><a href="#hint14" class="questions">(Hint: What data is available and what kind of data is it?)</a>
						<p class="answers" id="hint14">Species richness (numerical) + two treatment types (categorical).</p>
						<p><a href="#hint15" class="questions">(Hint: What do you want to do with the mean species richness for each treatment type or combination of treatment types?)</a>
						<p class="answers" id="hint15">Compare means to see if there are statistically significant differences between sites.</p>
					</blockquote>
					<p class="answers" id="answer15">A15: Analysis of variance. Since there are more than one categorical independent variable, use a two-way ANOVA.</p>
				</div>
				<div class="col-md-6 col-sm-6">
				
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-sm-6">
					<h4>The R Code:</h4>
					<p>my.anova: variable to hold analysis results
					<p>aov() function: performs the analysis of variance
					<p>depVar: numeric dependent variable
					<p>indepVar1 & indepVar2 are the categorical independent variable
					<p>‘*’ indicates to R analysis will include interactions between indepVar1 and indepVar2
				</div>
				<div class="col-md-6 col-sm-6">
					<div style="overflow:auto;"><div class="geshifilter"><pre class="r geshifilter-R" style="font-family:monospace;">my.anova <span style="">&lt;-</span> <a href="http://inside-r.org/r-doc/stats/aov"><span style="color: #003399; font-weight: bold;">aov</span></a><span style="color: #009900;">&#40;</span>depVar <span style="">~</span> indepVar1 <span style="">*</span> indepVar2<span style="color: #009900;">&#41;</span><span style="color: #339933;">;</span>
<a href="http://inside-r.org/r-doc/base/summary"><span style="color: #003399; font-weight: bold;">summary</span></a><span style="color: #009900;">&#40;</span>my.anova<span style="color: #009900;">&#41;</span><span style="color: #339933;">;</span></pre></div></div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-sm-6">
					<h4>The Full R Script:</h4>
					<div style="overflow:auto;"><div class="geshifilter"><pre class="r geshifilter-R" style="font-family:monospace;"><span style="color: #666666; font-style: italic;">## Set working directory, load libraries, import data</span>
<a href="http://inside-r.org/r-doc/base/setwd"><span style="color: #003399; font-weight: bold;">setwd</span></a><span style="color: #009900;">&#40;</span>“……<span style="color: #0000ff;">&quot;);
library(&quot;</span><a href="http://inside-r.org/packages/cran/xlsx"><span style="">xlsx</span></a><span style="color: #0000ff;">&quot;);
sppRichness &lt;- read.xlsx(&quot;</span>species_richness.xlsx<span style="color: #0000ff;">&quot;,1);
&nbsp;
## Two-way ANOVA with interactions
anova.full &lt;- aov(
  richness ~ fertilized * fire,
  data = sppRichness
);
summary(anova.full);</span></pre></div></div>
				</div>
				<div class="col-md-6 col-sm-6">
					<h4>R Output:</h4>
					<div style="overflow:auto;"><div class="geshifilter"><pre class="r geshifilter-R" style="font-family:monospace;">                Df Sum Sq Mean Sq F value Pr<span style="color: #009900;">&#40;</span><span style="">&gt;</span>F<span style="color: #009900;">&#41;</span>  
fertilized       <span style="color: #cc66cc;">1</span>  <span style="color: #cc66cc;">101.5</span>  <span style="color: #cc66cc;">101.53</span>   <span style="color: #cc66cc;">4.844</span> <span style="color: #cc66cc;">0.0362</span> <span style="">*</span>
fire             <span style="color: #cc66cc;">1</span>    <span style="color: #cc66cc;">5.3</span>    <span style="color: #cc66cc;">5.28</span>   <span style="color: #cc66cc;">0.252</span> <span style="color: #cc66cc;">0.6196</span>  
fertilized<span style="">:</span>fire  <span style="color: #cc66cc;">1</span>    <span style="color: #cc66cc;">7.0</span>    <span style="color: #cc66cc;">7.03</span>   <span style="color: #cc66cc;">0.335</span> <span style="color: #cc66cc;">0.5671</span>  
Residuals       <span style="color: #cc66cc;">28</span>  <span style="color: #cc66cc;">586.9</span>   <span style="color: #cc66cc;">20.96</span>                 
<span style="">---</span>
Signif. codes<span style="">:</span>  <span style="color: #cc66cc;">0</span> ‘<span style="">***</span>’ <span style="color: #cc66cc;">0.001</span> ‘<span style="">**</span>’ <span style="color: #cc66cc;">0.01</span> ‘<span style="">*</span>’ <span style="color: #cc66cc;">0.05</span> ‘.’ <span style="color: #cc66cc;">0.1</span> ‘ ’ <span style="color: #cc66cc;">1</span></pre></div></div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-sm-6">
					<h4>Results:</h4>
					<p>p-value for fertilization = 0.0362
					<p>p-value for fire = 0.6196
					<p>p-value for the fertilization/fire interaction = 0.5671
					<p><a href="#answer16" class="questions">Q16: Considering the different p-values for the different terms, do you or do you not reject the null hypotheses? Which do you reject and which do you not? (click for answer)</a></p>
					<span class="answers" id="answer16">
						<p>A16: Do not reject the null hypothesis that there are no significant differences in the species richness of plots exposed to periodic fire.</p>
						<p>A16: Reject the null hypothesis that there are no significant differences in the species richness of fertilized plots.</p>
						<p>A16: Do not reject the null hypothesis that there are no effects of interactions between fertilization and fire on species richness.</p>
					</span>
					
					<p><a href="#answer17" class="questions">Q17: What is the answer to the question: Does fire and/or fertilization affect species richness? (click for answer)</a>
					<p class="answers" id="answer17">A17: Only fertilization affects species richness</p>
				</div>
				<div class="col-md-6 col-sm-6">
				
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-sm-6">
					<h3>Example 4: Amphipod Egg Production vs. Adult Weight</h3>
					<h4>Question:</h4>
					<p>Do larger females produce more eggs?
					<h4>The Setup:</h4>
					<ul class="normal">
						<li>Collect 28 female <span class="italic">Platorchestia patensis</span>
						<li>Count number of eggs being carried
						<li>Freeze-dry and weigh females
					</ul>
					<h4>The Data:</h4>
					<p>Download the data file: <a href="data/amphipod_eggs.xlsx">amphipod_eggs.xlsx</a>
				</div>
				<div class="col-md-6 col-sm-6">
					<img src="images/module09example4image.jpg">
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-sm-6">
					<a href="images/amphipod-eggs.jpg" target="new_window"><img src="images/amphipod-eggs.jpg"></a>
					<p>Table 4: Subset for the data file.
				</div>
				<div class="col-md-6 col-sm-6">
					<h4>Amphipod Egg Production vs. Adult Weight</h4>
					<a href="images/module09example4plot.png" target="new_window"><img src="images/module09example4plot.png"></a>
					<p>Figure 4: Scatter plot of number of eggs as a function of female weight (mg).
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-sm-6">
					<h4>Hypotheses:</h4>
					<p><a href="#answer18" class="questions">Q18: What is the null hypothesis? (click for answer)</a>
					<blockquote class="block-hint">
						<p><a href="#hint16" class="questions">(Show Hint)</a>
						<p class="answers" id="hint16">Hint: use the question to formulate the null hypothesis in terms of the data.</p>
						<p><a href="#hint17" class="questions">(Show Hint)</a>
						<p class="answers" id="hint17">Hint: formulate the null hypothesis in terms of the relationship between the variables.</p>
					</blockquote>
					<p class="answers" id="answer18">A18: H<sub>O</sub> = There is no correlation (r^2=0) between female weight and number of eggs produced.</p>
					<p><a href="#answer19" class="questions">Q19: What is the alternative hypothesis? (click for answer)</a>
					<blockquote class="block-hint">
						<p><a href="#hint18" class="questions">(Show Hint)</a>
						<p class="answers" id="hint18">Hint: the alternative hypothesis should state the opposite of the null hypothesis.</p>
					</blockquote>
					<p class="answers" id="answer19">A19: H<sub>A</sub> = There is a correlation (r^2≠0) between female weight and number of eggs produced.</p>
				</div>
				<div class="col-md-6 col-sm-6">
				
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-sm-6">
					<h4>The Statistical Test:</h4>
					<p><a href="#answer20" class="questions">Q20: Which test or method do we use? (click for answer)</a>
					<blockquote class="block-hint">
						<p><a href="#hint19" class="questions">(Hint: What data is available and what kind of data is it?)</a>
						<p class="answers" id="hint19">Female weight (numerical, randomly selected) + number of eggs (numerical, randomly selected).</p>
						<p><a href="#hint20" class="questions">(Show Hint)</a>
						<p class="answers" id="hint20">You want to look for an association between the variables.</p>
						<p><a href="#hint21" class="questions">(Show Hint)</a>
						<p class="answers" id="hint21">You want to test if one variable changes as the other changes.</p>
					</blockquote>
					<p class="answers" id="answer20">A20: Correlation Test.</p>
				</div>
				<div class="col-md-6 col-sm-6">
				
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-sm-6">
					<h4>The R Code:</h4>
					<p>x, y: numeric vectors (must have the same length)
					<p>method: which correlation coefficient to use (“pearson", "kendall", or "spearman“)
				</div>
				<div class="col-md-6 col-sm-6">
					<div style="overflow:auto;"><div class="geshifilter"><pre class="r geshifilter-R" style="font-family:monospace;"><a href="http://inside-r.org/r-doc/stats/cor.test"><span style="color: #003399; font-weight: bold;">cor.test</span></a><span style="color: #009900;">&#40;</span>x<span style="color: #339933;">,</span> y<span style="color: #339933;">,</span> method = <span style="color: #0000ff;">&quot;pearson&quot;</span><span style="color: #009900;">&#41;</span><span style="color: #339933;">;</span></pre></div></div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-sm-6">
					<h4>The Full R Script:</h4>
					<div style="overflow:auto;"><div class="geshifilter"><pre class="r geshifilter-R" style="font-family:monospace;"><span style="color: #666666; font-style: italic;">## Set working directory, load libraries, import data</span>
<a href="http://inside-r.org/r-doc/base/setwd"><span style="color: #003399; font-weight: bold;">setwd</span></a><span style="color: #009900;">&#40;</span>“……<span style="color: #0000ff;">&quot;);
library(&quot;</span><a href="http://inside-r.org/packages/cran/xlsx"><span style="">xlsx</span></a><span style="color: #0000ff;">&quot;);
amphipods &lt;- read.xlsx(&quot;</span>amphipod_eggs.xlsx<span style="color: #0000ff;">&quot;,1);
&nbsp;
## Pearson correlation test
cor.test(amphipods$weight, amphipods$eggs, method = &quot;</span>pearson<span style="color: #0000ff;">&quot;);
&nbsp;
## Non-parametric (Spearman) correlations test
spearman.test = cor.test(amphipods$weight, amphipods$eggs, method = &quot;</span>spearman<span style="color: #0000ff;">&quot;);</span></pre></div></div>
				</div>
				<div class="col-md-6 col-sm-6">
					<h4>R Output (Pearson's):</h4>
					<div style="overflow:auto;"><div class="geshifilter"><pre class="r geshifilter-R" style="font-family:monospace;">	Pearson<span style="color: #0000ff;">'s product-moment correlation
&nbsp;
data:  amphipods$weight and amphipods$eggs
t = 2.5934, df = 26, p-value = 0.0154
alternative hypothesis: true correlation is not equal to 0
95 percent confidence interval:
 0.09660431 0.70686596
sample estimates:
      cor 
0.4533424</span></pre></div></div>
					<h4>R Output (Spearman's):</h4>
					<div style="overflow:auto;"><div class="geshifilter"><pre class="r geshifilter-R" style="font-family:monospace;">	Spearman<span style="color: #0000ff;">'s rank correlation rho
&nbsp;
data:  amphipods$weight and amphipods$eggs
S = 2019.5, p-value = 0.017
alternative hypothesis: true rho is not equal to 0
sample estimates:
      rho 
0.4473239           </span></pre></div></div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-sm-6">
					<h4>Results:</h4>
					<p>Pearson's product-moment correlation p-value = 0.0154
					<p>Spearman's rank correlation p-value = 0.017
					<p><a href="#answer21" class="questions">Q21: Since the p-values for both tests are less than 0.05, do you or do you not reject the null hypothesis? (click for answer)</a>
					<p class="answers" id="answer21">A21: Reject the null hypothesis. Therefore, there is evidence to support the alterative hypothesis.</p>
					<p><a href="#answer22" class="questions">Q22: What is the answer to the question: Do larger females produce more eggs? (click for answer)</a>
					<p class="answers" id="answer22">A22: Yes, larger females do indeed produce more eggs.</p>
				</div>
				<div class="col-md-6 col-sm-6">
				
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-sm-6">
					<h3>Example 5: The Latitudinal Diversity Gradient</h3>
					<h4>Question:</h4>
					<p>Is alpha-diversity grater at lower latitudes?
					<h4>The Setup:</h4>
					<ul class="normal">
						<li>Christmas bird count 2005
						<li>16 sites along Demarva Peninsula
						<li>Measured alpha-diversity (# of unique species present)
					</ul>
					<h4>The Data:</h4>
					<p>Download the data file: <a href="data/bird_count.xlsx">bird_count.xlsx</a>
				</div>
				<div class="col-md-6 col-sm-6">
					<img src="images/module09example5image.jpg">
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-sm-6">
					<a href="images/bird-count.jpg" target="new_window"><img src="images/bird-count.jpg"></a>
					<p>Table 5: Subset for the data file.
				</div>
				<div class="col-md-6 col-sm-6">
					<h4>Species Richness vs. Latitude</h4>
					<a href="images/module09example5plot.png" target="new_window"><img src="images/module09example5plot.png"></a>
					<p>Figure 5: Scatter plot of species richness as a function of latitude.
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-sm-6">
					<h4>Hypotheses:</h4>
					<p><a href="#answer23" class="questions">Q23: What is the null hypothesis? (click for answer)</a>
					<blockquote class="block-hint">
						<p><a href="#hint22" class="questions">(Show Hint)</a>
						<p class="answers" id="hint22">Hint: use the question to formulate the null hypothesis in terms of the data.</p>
						<p><a href="#hint23" class="questions">(Show Hint)</a>
						<p class="answers" id="hint23">Hint: formulate the null hypothesis in terms of the relationship between the variables.</p>
					</blockquote>
					<p class="answers" id="answer23">A23: H<sub>O</sub> = There is no correlation (r^2=0) between latitude and species richness.</p>
					<p><a href="#answer24" class="questions">Q24: What is the alternative hypothesis? (click for answer)</a>
					<blockquote class="block-hint">
						<p><a href="#hint24" class="questions">(Show Hint)</a>
						<p class="answers" id="hint24">Hint: the alternative hypothesis should state the opposite of the null hypothesis.</p>
					</blockquote>
					<p class="answers" id="answer24">A24: H<sub>A</sub> = There is a correlation (r^2≠0) between latitude and species richness.</p>
				</div>
				<div class="col-md-6 col-sm-6">
				
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-sm-6">
					<h4>The Statistical Test:</h4>
					<p><a href="#answer25" class="questions">Q25: Which test or method do we use? (click for answer)</a>
					<blockquote class="block-hint">
						<p><a href="#hint25" class="questions">(Hint: What data is available and what kind of data is it?)</a>
						<p class="answers" id="hint25">Latitude (numerical, fixed) + species richness (numerical, randomly selected).</p>
						<p><a href="#hint26" class="questions">(Show Hint)</a>
						<p class="answers" id="hint26">You want to look for an association between the variables.</p>
						<p><a href="#hint27" class="questions">(Show Hint)</a>
						<p class="answers" id="hint27">Latitude is a fixed variable that will predict species richness.</p>
						<p><a href="#hint28" class="questions">(Show Hint)</a>
						<p class="answers" id="hint28">You want to test if the random variable changes as the predictor variable changes.</p>
					</blockquote>
					<p class="answers" id="answer25">A25: Regression + Correlation Test.</p>
				</div>
				<div class="col-md-6 col-sm-6">
				
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-sm-6">
					<h4>The R Code:</h4>
					<p>x, y: numeric vectors (must have the same length)
					<p>method: which correlation coefficient to use (“pearson", "kendall", or "spearman“)
				</div>
				<div class="col-md-6 col-sm-6">
					<div style="overflow:auto;"><div class="geshifilter"><pre class="r geshifilter-R" style="font-family:monospace;"><a href="http://inside-r.org/r-doc/stats/cor.test"><span style="color: #003399; font-weight: bold;">cor.test</span></a><span style="color: #009900;">&#40;</span>x<span style="color: #339933;">,</span> y<span style="color: #339933;">,</span> method = <span style="color: #0000ff;">&quot;pearson&quot;</span><span style="color: #009900;">&#41;</span><span style="color: #339933;">;</span></pre></div></div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-sm-6">
					<h4>The Full R Script:</h4>
					<div style="overflow:auto;"><div class="geshifilter"><pre class="r geshifilter-R" style="font-family:monospace;"><span style="color: #666666; font-style: italic;">## Set working directory, load libraries, import data</span>
<a href="http://inside-r.org/r-doc/base/setwd"><span style="color: #003399; font-weight: bold;">setwd</span></a><span style="color: #009900;">&#40;</span>“……<span style="color: #0000ff;">&quot;);
library(&quot;</span><a href="http://inside-r.org/packages/cran/xlsx"><span style="">xlsx</span></a><span style="color: #0000ff;">&quot;);
birds &lt;- read.xlsx(&quot;</span>bird_count.xlsx<span style="color: #0000ff;">&quot;,1);
&nbsp;
## Pearson correlation test
pearson.test = cor.test(birds$Number.of.species, birds$Latitude, method = &quot;</span>pearson<span style="color: #0000ff;">&quot;);
pearson.test $estimate^2;
&nbsp;
## Model
regression.model &lt;- lm(birds$Number.of.species ~ birds$Latitude);
summary(regression.model);</span></pre></div></div>
				</div>
				<div class="col-md-6 col-sm-6">
					<h4>R Output:</h4>
					<div style="overflow:auto;"><div class="geshifilter"><pre class="r geshifilter-R" style="font-family:monospace;">Call<span style="">:</span>
<a href="http://inside-r.org/r-doc/stats/lm"><span style="color: #003399; font-weight: bold;">lm</span></a><span style="color: #009900;">&#40;</span><a href="http://inside-r.org/r-doc/stats/formula"><span style="color: #003399; font-weight: bold;">formula</span></a> = birds<span style="">$</span>Number.of.species <span style="">~</span> birds<span style="">$</span>Latitude<span style="color: #009900;">&#41;</span>
&nbsp;
Residuals<span style="">:</span>
    Min      1Q  Median      3Q     Max 
<span style="">-</span><span style="color: #cc66cc;">25.719</span> <span style="">-</span><span style="color: #cc66cc;">10.558</span>  <span style="">-</span><span style="color: #cc66cc;">1.433</span>  <span style="color: #cc66cc;">10.334</span>  <span style="color: #cc66cc;">28.737</span> 
&nbsp;
Coefficients<span style="">:</span>
               Estimate Std. Error <a href="http://inside-r.org/r-doc/base/t"><span style="color: #003399; font-weight: bold;">t</span></a> value Pr<span style="color: #009900;">&#40;</span><span style="">&gt;|</span>t<span style="">|</span><span style="color: #009900;">&#41;</span>  
<span style="color: #009900;">&#40;</span>Intercept<span style="color: #009900;">&#41;</span>     <span style="color: #cc66cc;">633.815</span>    <span style="color: #cc66cc;">236.001</span>   <span style="color: #cc66cc;">2.686</span>   <span style="color: #cc66cc;">0.0177</span> <span style="">*</span>
birds<span style="">$</span>Latitude  <span style="">-</span><span style="color: #cc66cc;">13.324</span>      <span style="color: #cc66cc;">6.113</span>  <span style="">-</span><span style="color: #cc66cc;">2.180</span>   <span style="color: #cc66cc;">0.0469</span> <span style="">*</span>
<span style="">---</span>
Signif. codes<span style="">:</span>  <span style="color: #cc66cc;">0</span> ‘<span style="">***</span>’ <span style="color: #cc66cc;">0.001</span> ‘<span style="">**</span>’ <span style="color: #cc66cc;">0.01</span> ‘<span style="">*</span>’ <span style="color: #cc66cc;">0.05</span> ‘.’ <span style="color: #cc66cc;">0.1</span> ‘ ’ <span style="color: #cc66cc;">1</span>
&nbsp;
Residual standard error<span style="">:</span> <span style="color: #cc66cc;">16.41</span> on <span style="color: #cc66cc;">14</span> degrees of freedom
Multiple R<span style="">-</span>squared<span style="">:</span>  <span style="color: #cc66cc;">0.2534</span><span style="color: #339933;">,</span>	Adjusted R<span style="">-</span>squared<span style="">:</span>    <span style="color: #cc66cc;">0.2</span> 
F<span style="">-</span>statistic<span style="">:</span> <span style="color: #cc66cc;">4.751</span> on <span style="color: #cc66cc;">1</span> and <span style="color: #cc66cc;">14</span> DF<span style="color: #339933;">,</span>  p<span style="">-</span>value<span style="">:</span> <span style="color: #cc66cc;">0.04685</span></pre></div></div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-sm-6">
					<h4>Results:</h4>
					<p>Latitude p-value = 0.0469
					<p>Adjusted R-squared = 0.2
					<p><a href="#answer26" class="questions">Q26: Since the p-values for latitude is less than 0.05, do you or do you not reject the null hypothesis? (click for answer)</a>
					<p class="answers" id="answer26">A26: Reject the null hypothesis. Therefore, there is evidence to support the alterative hypothesis.</p>
					<p><a href="#answer27" class="questions">Q27: How much of the species richness is latitude able to predict? (click for answer)</a>
					<p class="answers" id="answer27">A27: 20% (the adjusted R-squared value).</p>
				</div>
				<div class="col-md-6 col-sm-6">
				
				</div>
			</div>
		</div>
	</body>
</html>
