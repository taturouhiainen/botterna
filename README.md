# botterna
Furniture bot for a 2nd-hand business generated over 5-figures/month for 9 months (10/2021-6/2022) by alerting users of new products on tori.fi, enabling fast messaging to sellers to close deals quicker than the competition.

Why Botterna was created:
- We needed a way to beat competition to the newest couches on market. Botterna would manual work of constantly refreshing marketplaces to instead get a straight notification to email once a product was available.

How Botterna functions:
THE FILES:
- It is a PHP project consisting of multiple parts
- It is meant to be run as a cron script every minute
- botterna.php consists the logic and the functions
- 0.php, 10.php, 20.php, 30.php, 40.php, 50.php are to make the code more effective, essentially run botterna. php every 10 seconds as most hosting services don't allow quicker cron script delay's than 1 minute. For the purpose every second counted.
- 0.php is the script to set for a cron task with 1 minute delay
- index.php is the user interface where users can toggle their bot subscriptions

BOTTERNA.PHP
-  Database requirements: one for storing subscribers's emails, n amount of databases for n amount of individual bots.
- The code should be well documented explaining the functions in the code with comments.
- Can be applied to any producs in tori.fi

How it could be improved:
- Optimize bot adding / removing. Now it requires manual work to change the bots.
- You have to manually update the specific link to the product search you want to scout.
- Relies heavily on tori.fi get variables in the domain, if they change their website, this code will not function.

