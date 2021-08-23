# FCONN
This is a capstone project for my last semester of undergrad. We are continuing the work of a previous semester on a web application called FCONN. It is like the app Strava, but for food. 

***Starting up the project***

In order to open up and make changes to this project, follow these steps.
1. Install xampp and dbeaver.
2. Add this to htdocs in the xampp folder.
3. Open up in visual studio code.
4. Run and debug in Chrome.
    - This should open up the project in chrome with your changes.

***Don't forget***

You don't want to be on the same branch that someone else is making changes on!
If you want your own branch to later add to main, follow these steps.
1. Open up the project on vscode and open the terminal. 
2. **git checkout -b < name of new branch >** 
3. This will put you on your local dev branch.
4. **git fetch**
   -This will pull in any recent changes someone has made.
5. Once you are done with your changes, **git add .** 
    - Don't forget the "." at the end, that brings all changes.
6. **git commit -m "Message of what you did"**
7. **git push **
    - This will push your changes to your local branch.
8. **git checkout main**
9. **git merge < name of branch you just made >**
    -If you worked on the same file as someone else, you will have conflicts.
     Let me know and I'll help you fix them.
10. **git push**


***Even Easier***
You can do all the above steps in the source control on vscode.
![image](https://user-images.githubusercontent.com/47707510/130386030-5f9485d2-9c2b-4add-8236-8ec68c96b6a0.png)

