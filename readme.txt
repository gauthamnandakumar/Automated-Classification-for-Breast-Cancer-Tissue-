# Automated Diagnosis for Breast Cancer Tissue Type
>Version 1.0
>December 2017

>The Dataset for the function was taken from:
LINK

## Software Dependencies
- MATLAB for running the functions
- PHP for webinterface
- Mozilla Firefox add-on: SQLite Manager for managing dataset
- Neural Network Toolbox in Matlab


## Functions included in this package 


>**Databasefind.m**
The function inputs the values of the Sample number taken from the user. It searched the database and dispalys
the match of the sample if found. 

>**prediction.m**
The function tests the inputed data by the user on the already trained system and displays a value of either 2 
or 4. 2 for benign and 4 malignant. 

>**visualize.m**
The function performs PCA and visualizes the data in 3D construct with the 3 calculated principal axis. 

>**classify_data.m**
The function trains the classifier and calculates the Error percent of the trained system. It further validate the performance.

>**cancer_data.m**
The function is the main program that integrates all the above functions. The input to the function is the 
9 parameters and it displays the class of the inputed user data.

>**form1.php**
Is the Welcome page of our interface to let the user either do a Daabase Search or classify new data. 

>**form2.php**
Lets the user input all the 9 parameters to display the class(Benign or Malignant).

!!!!!!IMPORTANT!!!!!
It is important to note that before executing form1 and form2; the path to matlab.exe must be changed to fit the user's system.