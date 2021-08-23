# FCONN
This is a capstone project for my last semester of undergrad. We are continuing the work of a previous semester on a web application called FCONN. It is like the app Strava, but for food. 

***Starting up the project***

In order to open up and make changes to this project, follow these steps.
1. Install xampp and dbeaver.
2. Add this to htdocs in the xampp folder.
3. Open up in visual studio code.
4. Run and debug in Chrome.
    - This should open up the project in chrome with your changes.

**Don't forget**

You don't want to be on the same branch that someone else is making changes on!
If you want your own branch to later add to main, follow these steps.
1. git checkout -b <name of new branch>
2. This will put you on that branch.
3. git fetch
   -This will pull in any recent changes someone has made.
4. Once you are done with your changes, git add . 
    - Don't forget the "." at the end, that brings all changes.
5. git commit -m "Message of what you did"
6. git push 
    - This will push your changes to your local branch.
7. git checkout main
8. git merge <name of branch you just made>
9. If you worked on the same file as someone else, you will have conflicts.
   Let me know and I'll help you fix them.
