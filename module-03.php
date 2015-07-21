<?php include("header.php") ?>
			<div class="row">
				<div class="col-md-6 col-sm-6">
					<h3>Module 3: Hypothesis Testing</h3>
					<p>What did you ask? A review of the major tests based on the question asked, a quick look at data to see if test is valid (parametric vs non-parametric), and how to run these tests in R. This module will focus on hypothesis testing and what statistical significance means, and how to tell if your data is statistically significant, and does it actually mean something biologically.
					<h3>3.1 General Process for Using R to Test Hypotheses</h3>
					<p>Hypothesis testing involves assigning a probability to your observed data given the conditions that it is a random null world. If the probability is low that you can your data in a random null world, then you rject the null hypothesis and accept the premises set by your alternative hypothesis. If the probability is high that you can obtain your data in a random null world, you must accept the premises set by a null world and reject your alternative hypothesis.
					<p>In order to assign a probability to your data and test your hypothesis in R, you may need to summarize your data using the functions presented in Module 2. Once you have your test statistic, most likely a mean or proportion, you will use another R function outlined here in Module 3 to assign a probability to this test statistic. Regardless of whichever statistical test you will use, you will follow this general process. Understanding this process will ensure you are inputting your data into the correct test function and that you will interpret your output appropriately.
				</div>
				<div class="col-md-6 col-sm-6">
					<a href="images/hypothesis-testing-block-dia.jpg" target="new_window"><img src="images/hypothesis-testing-block-dia.jpg"></a>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-sm-6">
					<h3>3.2 Categorical: What to Do When You Are Expecting</h3>
					<p>Questions involving categorical data usually require figuring out whether what you observed actually differs from what you expected to observe. For example, lets say you observe how often a particular species of bee visits a set of flowers in an experimental meadow:
					<a href="images/frequency-table-hist.jpg" target="new_window"><img src="images/frequency-table-hist.jpg"></a>
					<p>Does this bee have a preference for any particular flower? To test this, we can fit a proportional model to the data using the X<sup>2</sup> goodness-of-fit test. the X<sup>2</sup> goodness-of-fit test measures the discrepancy between an observed frequency distribution (i.e. your data) and what would be expected under a simple random model.
				</div>
				<div class="col-md-6 col-sm-6">
					<a href="images/Module03-01plot.png" target="new_window"><img src="images/Module03-01plot.png"></a>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-sm-6">
					<h4>Step 1: State H<sub>o</sub> and H<sub>a</sub></h4>
					<blockquote>H<sub>o</sub>: The probability of the bee visiting a particular flower species is the same across all species present in the meadow.</blockquote>
					<blockquote>H<sub>a</sub>: The probability of the bee visiting a particular flower species is not the same across all species present in the meadow.</blockquote>
				</div>
				<div class="col-md-6 col-sm-6">
					<h4>Step 2: Calculate the Observed and Expected Frequencies</h4>
					<a href="images/expected-frequency-table.jpg" target="new_window"><img src="images/expected-frequency-table.jpg"></a>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-sm-6">
					<h4>Step 2.2: Calculate the X<sup>2</sup> Test Statistic</h4>
					<p>$\begin{align}\chi^2 &= \sum_{i=1}^{n}\frac{(observed_i-expected_i)^2}{expected_i}\\\chi^2 &= 0.282+51.162+1.215+...+42.264+1.118\\\chi^2 &= 173.675\end{align}$
					<h4>Step 3: Determine Sampling Distribution of X<sup>2</sup> Test Statistic Under H<sub>o</sub></h4>
					<p>The X<sup>2</sup> distribution is a family of distributions, and you need to calculate the degrees of freedom to figure out which distribution to use.
					<p>$\begin{align}df&=(number\ of\ categories)-1-(number\ of\ parameters\ estimated\ from\ data)\\df&=7-1-0\\df&=6\end{align}$


				</div>
				<div class="col-md-6 col-sm-6">
					<a href="images/Module03-02chisq.png" target="new_window"><img src="images/Module03-02chisq.png"></a>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-sm-6">
					<h4>Step 4: Calculate P-value</h4>
					<img src="images/p-value.jpg" class="center">
				</div>
				<div class="col-md-6 col-sm-6">
					<h4>Step 5: Accept or Reject H<sub>o</sub></h4>
					<p>Reject H<sub>o</sub> since probability of obtaining an X<sup>2</sup> value of 173.675 is much smaller than 0.05
					<p>The bee does visit particular flowers more often than other flowers; accept H<sub>a</sub>.					
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-sm-6">
					<h3>3.3 Categorical: How to Find an Association Between Two Categorical Variables</h3>
					<p>When you are trying to find an association between two categorical variables, you are essentially looking for a dependency between two variables. If the two variables are dependent, then the state of one variable is related to the probability of different outcomes of the other variable. The most common way to test for dependence between two categorical variables is the X<sup>2</sup> contingency test.
					<p>For example, let's say you studied how often aphids that were eaten by syrphid fly larvae were also parasitized by brachnoids (parasitoid wasps).
					<p>You observe the following frequencies:
					<a href="images/aphids-eaten-para.jpg"><img src="images/aphids-eaten-para.jpg"></a>
				</div>
				<div class="col-md-6 col-sm-6">
					
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-sm-6">
					<h4>Step 1: State H<sub>o</sub> and H<sub>a</sub></h4>
					<blockquote>H<sub>o</sub>: Parasitism by brachnoids and being eaten by syrphid larvae are independent.</blockquote>
					<blockquote>H<sub>a</sub>: Parasitism by brachnoids and being eaten by syrphid larvae are not independent</blockquote>
				</div>
				<div class="col-md-6 col-sm-6">
					
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-sm-6">
					<h4>Step 2: Calculate the X<sup>2</sup> Statistic</h4>
					<h4>Step 2.1: Calculate Your Expected Frequencies</h4>
					<p>To calculate your expected frequencies, you must remember that the probability of two independent events co-occuring is just the multiplication of the probability of each event.
					<p>So if parasitism by a brachnoid and being eaten by a syrphid larvae are independent, then:
					<blockquote>Pr [parasitized and eaten] = Pr[parasitized] x Pr[eaten]</blockquote>
					<p>We obtain our probabilities from the frequency table:
					<a href="images/aphids-eaten-para-prob.jpg"><img src="images/aphids-eaten-para-prob.jpg"></a>
					<blockquote>We calculate the probability that the aphid will be unparasitized and eaten is just 0.401 x 0.375 = 0.150.
					And the expected value would then be 0.150 x 152 = 22.8.</blockquote>
					<p>Given this pattern, we would have the following table of expected values:
					<a href="images/expected-aphids-eaten-para.jpg"><img src="images/expected-aphids-eaten-para.jpg"></a>
					
				</div>
				<div class="col-md-6 col-sm-6">
					<a href="images/Module03-03contingency.png" target="new_window"><img src="images/Module03-03contingency.png"></a>
					<p>And again we need to calculate the X<sup>2</sup> statistic:
					<p>$Pr(parasitized and eaten)=Pr(parasitized)\times Pr(eaten)$
					<p>	$\begin{align}\chi^2 &= \sum_{i=1}^{r}\sum_{j=1}^{c}\frac{(observed_{i,j}-expected_{i,j})^2}{expected_{i,j}}\\\chi^2 &= \frac{(10-22.80)^2}{22.80} + \frac{(47-34.14)^2}{34.14} + \frac{(51-38.10)^2}{38.10} + \frac{(44-56.91)^2}{56.91}\\\chi^2 &= 7.19 + 4.84 + 4.37 + 2.93\\\chi^2 &= 19.33\end{align}$
					<p> Next you need to find your degree of freedom to determine which X<sup>2</sup> distribution you will use.
					<p> $\begin{align}df &= (r-1)(c-1)\\df &= (2-1)(2-1)\\df &= 1\end{align}$
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-sm-6">
					<h3>3.4 Numerical: Comparing Means Between Two Groups</h3>
					<p>Before jumping into how to compare two means computationally, we need to briefly digress into how to compare two means experimentally since this will affect how your hypothesis tests.
					<p>There are two designs to test differences between the means of two treatments: paired samples or two-sample designs. In a paired sample, you randomly sample your subjects and apply the two treatments to all the subjects. In a two-sample design, you again randomly sample your subjects, but you apply one treatment to half the subjects and apply the second treatment to the second half of your subjects.
					<p>For example, let's say you want to measure the effect of neonicotinoids on Osmia lignaria, a solitary cavity-nesting bee. Specifically, you decide you want to measure how quickly Osmia females return to their nest after feeding on nectar containing neonicotinoids. 
					<p>Let's first look at comparing means from the paired sample design.
				</div>
				<div class="col-md-6 col-sm-6">
					<a href="images/paired-t.jpg"><img src="images/paired-t.jpg"></a>

				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-sm-6">
					<p>You collect the following measurements:
					<a href="images/paired-table.jpg"><img src="images/paired-table.jpg"></a>
					<p>Then we find the sample mean difference, standard deviation of difference, and sample size:
					<p>$\begin{align}&\bar{d}=0.45\\&S_{\bar{d}}=0.23214\\&n = 10\end{align}$
					<p>And the confidence interval:
					<p>$\bar{d}-t_{\alpha(2),df}SE_{\bar{d}} < \mu_{d} < \bar{d}+t_{\alpha(2),df}SE_{\bar{d}}$
					<p>With h=10, we have d&#131;=9, and we look up in a table the t-statistic(t) for $\alpha$ = 0.05, two-tails(2), and d&#131; = 12 which gives us 2.26.
					<p>So now we can say that we are 95% confident that the true mean difference falls between x and x. (Not that there is a 95% probability that your true mean difference is between x and x.)
				</div>
				<div class="col-md-6 col-sm-6">
					<a href="images/Module03-08scatterplot.png"><img src="images/Module03-08scatterplot.png"></a>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-sm-6">
				<p>Now to test whether there was a difference in foraging time, we essentially run a one-sample t-test.
				<h4>Step 1: State H<sub>o</sub> and H<sub>a</sub></h4>
				<blockquote>H<sub>o</sub>: The mean change in foraging time after neonicotinoid exposure was zero. (Md = 0)
					<br>
					H<sub>a</sub>: The mean  change in foraging time after neonicotinoid exposure was not zero. (Md =/= 0)</blockquote>
				<h4>Step 2: Calculate Your Test Statistic t:</h4>
					<p>$t=\frac{\bar{d}-\mu_{d0}}{SE_{\bar{d}}}$
				<p>For our example,
					<p>$t=\frac{-0.45-0}{0.23214}$
				<p>Our test statistic t has a t-distribution with df = n-1 or a df = 9.
				
				
				</div>
				<div class="col-md-6 col-sm-6">
					<h4>Step 3: Determine the Sampling Distribution of the t Test Statistic Under H<sub>o</sub></h4>
					<p>We will use a t-distribution which is similar in shape to the normal distribution but it accounts for sampling error that may occur by chance. Overall the sampling distribution of t is wider than the normal distribution.
					<p>You will choose a t-distribution with df = 9.
					<h4>Step 4: Calculate P-value</h4>
					<p>You can approximate a P-value from statistical tables as well.
					<h4>Step 5: Accept or Reject H<sub>o</sub></h4>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-sm-6">
					<h3>Unpaired Sample Design:</h3>
					<p>Now let's compare the means between your unpaired on independent samples. Here we exposed 10 Osmia females to neonicotinoids and left another 10 Osmia females unexposed, and then we measured the time it took to forage.
					<a href="images/unpaired-table.jpg"><img src="images/unpaired-table.jpg"></a>
					<a href="images/unpaired-mean-blank.jpg"><img src="images/unpaired-mean-blank.jpg"></a>
				</div>
				<div class="col-md-6 col-sm-6">
					<a href="images/Module03-11unpaired.png"><img src="images/Module03-11unpaired.png"></a>
					<a href="images/Module03-12unpaired.png"><img src="images/Module03-12unpaired.png"></a>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-sm-6">
					<h3>Confidence Interval for the Difference Between Two Means</h3>
					<p>First, we need to calculate the standard error of the difference in means with y<sub>1</sub> =  mean of foraging time without neonicotinoid exposure and y<sub>2</sub> = mean of foraging time with neonicotinoid exposure:
					<p>$SE_{\bar{y}_1-\bar{y}_2}=\sqrt{Sp^2(\frac{1}{n_1}+\frac{1}{n_2})}\ \ \ \ \ \ where\ \ \ \ \ \ Sp^2=\frac{df_1s_1^2+df_2s_2^2}{df_1+df_2}$
					<p>Sp<sup>2</sup> is the pooled sample variance or the weighted average of the sample variances (squared standard deviations) of the two groups. d&#131;<sub>1</sub> = n<sub>1</sub> - 1 or d&#131;<sub>1</sub> = 0 and d&#131;<sub>2</sub> = n<sub>2</sub> -1 or d&#131;<sub>2</sub> = 9.
					<p>The confidence interval is then given by:
					<p>$(\bar{y}_1-\bar{y}_2)-t_{\alpha(2),df}SE_{\bar{y}_1-\bar{y}_2} < \mu_1-\mu_2 < (\bar{y}_1-\bar{y}_2)+t_{\alpha(2),df}SE_{\bar{y}_1-\bar{y}_2}$
					<p>We can obtain the t<sub>$\alpha$(2),d&#131;</sub> from statistical tables where d&#131; = 18 (or d&#131;<sub>1</sub> + d&#131;<sub>2</sub>) and $\alpha$ = 0.05. The "2" notation just refers to the fact that this is a two-tailed test.
					<p>Now we can compare the means of our two independent groups.
					<h4>Step 1: State H<sub>o</sub> and H<sub>a</sub></h4>
					<blockquote>H<sub>o</sub> The mean foraging time for non-exposed bees and the mean foraging time for exposed bees are equal.
					<p>
					H<sub>a</sub> The mean foraging time for non-exposed bees and the mean foraging time for exposed bees are not equal.</blockquote>

				</div>
				<div class="col-md-6 col-sm-6">
					<a href="images/Module03-10unpaired.png"><img src="images/Module03-10unpaired.png"></a>
					<h4>Step 2: Calculate the test statistic t</h4>
					<p>$t=\frac{\bar{y}_1-\bar{y}_2}{SE_{\bar{y}_1-\bar{y}_2}}$
					<h4>Step 3: Determine Sampling Distribution for the t-Test Statistic</h4>
					<h4>Step 4: Calculate P-value</h4>
					<h4>Step 5: Accept or Reject H<sub>o</sub></h4>
				</div>
			</div>
			<div class="row">
				<a href="images/hypothesis-testing-horiz.jpg" target="new_window"><img src="images/hypothesis-testing-horiz.jpg"></a>
			</div>
		</div>
	</body>
</html>
