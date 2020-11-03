# FINAL YEAR PROJECT PROCESS AUTOMATION SYSTEM 

**Modules**

![](RackMultipart20201103-4-1cbfiyc_html_28aab42d4eff8c71.gif)Concept of the system is of web app and the core concept of the result of the project revolved around that of a FYP stakeholders. This systems workflow is

**Super Admin**

1) Super Admin, it will be single user no other super admin will exist

2) Supper admin have the ability to create committee Head and committee members.

**Committee**

3) One of the committee members will be head (created by super admin).

a) All committee members will have the power to make a final decision

b) He can make policies for FYP

4) Committee will have 10% of marks for all students this thing will be discussed later

**Advisor**

5) Advisors can post unlimited ideas.

6) Advisors can see group ideas that don&#39;t have any advisor yet.

a) Also can see the Group and their members with their CGPA.

b) Request groups to meet him for posted ideas.

7) Advisor can see groups&#39; requests they made to make him their advisor.

a) This will be an accepted and rejected case.

i) If the advisor accepts then this request forward to the committee member if any of the committee members approve it then he becomes advisor.

ii) If rejected, the advisor must write the reason for rejection.

8) Advisors can communicate with students

**Student**

10) Student can request other student for greeting a group

11) Student can request advisor to become their group advisor

12) Student and advisor can communicate through posting it on page

**FINAL YEAR PROJECT PROCESS AUTOMATION SYSTEM (FAS****)**

#

# Abstract

The main idea behind the project is to make an online FYP system for Mohammad Ali Jinnah University, which helps the Students, Jury, and FYP Committee. Created a system for every role of FYP member with a different account and create jury team and student request, accept. Yet creating a function to make jury and student share posts will be completely web-based, there are no special hardware requirements. It is completely web-based.

1 backend: Php laravel framework 5.8 will used on backend to run the website and bring the business logic into effect

2 database: We will use MySql database to store all the necessary data of the website

3 frontend: JavaScript HTML CSS Bootstrap are used for view

Manual procedure leads to lots of time-wasting, project work because the student carrying out the project work is not able to update the lecturer on the level of execution of the task or lead in lack of communication with the advisor. It could make managers or the faculty in control that can see and check the progress of student automation

portal used for the automation of the processes related to the last year extends to University. The procedures start from registration to submitting of project. As we have achieved to make different functionalities with complicated database

# CHAPTER 1: INTRODUCTION

## 1.1 Overview

Students find it very difficult when they have taken Final Year Project (FYP) course in such circumstances, it is very difficult for them to find their group partners and coordinate with Advisers from that most of the days goes by and students are unaware and confused, We have come up with a solution to solve their problem by going online with FYP Automation System

## 1.2 Objective

The main objective behind the project is to make the FYP registration process easier for the students. The user will have access to a centralized portal where they will find all the information they need to register for the FYP. The student will simply register and mention their idea along with their group members and the desired supervisor. The supervisor then sees the projects that the students have posted and then they can call the corresponding group.

# CHAPTER 2: Review of Literature

## 2.1 Review of Literature

There exist numerous FYP processing portals in different universities around the world however those frameworks to deal with the FYP process are not available by outsiders because of some security issues and there are few portals such as google classroom available but has its many limitations The details of the FYP process portal the executive&#39;s frameworks can&#39;t be found as they are hidden by the universities that use FYP process portal, we can just find the FYP entrances which are utilized to make declarations and sharing of assets. Just one university is being analyzed for their FYP process portal idea to make it to be used globally. Studies are performed on Muhammad Ali Jinnah University. There are a lot of contrasts between the FYP process portal of these colleges as far as structure and highlights. In addition, concentrates on reasonable programming language and the procedure had additionally been made

## 2.2 STUDIES ON EXISTING PORTAL

Each university has its uniqueness in its UI plan and Interface for the action of the components. At the main sight, we can see that the interface management portal of majuportal is the simpler compare to our idea of FYP process portal both portals are practically comparative where a lot of writings are being used. However we have attempted to make interface straightforwardly with the goal that the client/user can search for the information that they truly need rather they go through design. The structure for the majuportal and our project for FYP are reliable in terms of the shading utilized, the text style size. Most important about the consistency. Generally significant about the consistency is that design and structure stayed on a similar area on each page. that it is a decent practice.

## 2.3 Data Collection

Data is gathered from the administration of the University Student Name and facility there email related to FYP so that every student that is eligible for FYP has its own account on FYP portal. Once every account is created then every student data is collected through portal and stored in database

## 2.4 Analysis

Processes associated with undergraduate final year projects have always been a manual process which requires a lot of paperwork and could sometimes be a cumbersome and tiring task for the personnel in charge. The manual process sometimes leads to time.

## 2.5 Reporting

Database, design, and functionality of the system has been reported to Advisor. From the beginning to end of the project. since the project started data was gathered from students and reported to the advisor for further advice after every meeting with the advisor we designed a structure of the system that can play every role of stakeholder which were student, advisor, committee member, admin and jerry as the design was approved by advisor we further went with the functionality of individual role that was as student u can add other student and one advisor then post share, as admin you can create comminute as commute you can add students and every account created the mail goes to the user based of FYP every idea and functionality was reported to the advisor

#


# CHAPTER 3 Detailed Interface Design

The idea for design was to make its design simple that its user interface should be user friendly.

After studying design interface of many university portals our idea of an outcome was decided by my team to make a template that was simply. The layout will be consisting of three sections of template

First part is header which will be on top of template and consist of logo and user account button to where he can modify his personal data. Second part of portal template will be the navigation panel which will be on left side of template layout where there are clickable connections which permit the user to explore to various modules of the layout. Third part will consist of most of functions of system where will work on example group discussion user sending friend request.

![](RackMultipart20201103-4-1cbfiyc_html_18a7ce12fb477ceb.png)

## 3.1 First Page for Login Interface

User to login with email and password given to them through their email.

![3 1](https://user-images.githubusercontent.com/38830975/98007056-c2b8c400-1e14-11eb-9389-a91b2639516e.png)

## 3.2 Login as Admin Interface

Login with role of admin. Admin has most important role in portal as he has authority to create committee.

![3 2](https://user-images.githubusercontent.com/38830975/98007059-c3e9f100-1e14-11eb-9706-d6e9443d462f.png)

## 3.3 Create Committee Interface

From admin id create committee link is clicked through which he can create committee through name and email.

![3 3](https://user-images.githubusercontent.com/38830975/98007061-c4828780-1e14-11eb-9c8f-41460fb79fa9.png)

## 3.4 My Account Interface

Clicking on My Account link admin can change his personal information.

![3 4](https://user-images.githubusercontent.com/38830975/98007671-7ae66c80-1e15-11eb-9d31-a0345d6f9831.png)


## 3.5 Login as Committee Member Interface

Login as role Committee Member. Committee has authority to add advisor, students and jury teams.

![3 5](https://user-images.githubusercontent.com/38830975/98007676-7b7f0300-1e15-11eb-86ea-2806de504452.png)

## 3.6 Create Jury Team Interface

In this link committee can create jury team from different advisors added to portal the limit is 3 in members in a team.

![3 6](https://user-images.githubusercontent.com/38830975/98007063-c51b1e00-1e14-11eb-9802-c47dfc1e03cb.png)

## 3.7 Committee ADD STUDENT Excel Sheet Interface

Committee can add bunch of student in one go with uploading excel sheet and then every individual student will be emailed with their email and password.

![3 7](https://user-images.githubusercontent.com/38830975/98007066-c5b3b480-1e14-11eb-8394-9005971b2499.png)

## 3.8 Login as Advisor Interface

Login as Advisor. Advisor has authority to publish his idea see other advisors ideas and if he is in a jury team then he can coordinate with other jury members.

![3 8](https://user-images.githubusercontent.com/38830975/98007068-c64c4b00-1e14-11eb-8795-ad0b8fe241d7.png)

## 3.9 Advisor Publish Ideas Interface

Here advisor can publish his ideas for students.

![3 9](https://user-images.githubusercontent.com/38830975/98007999-dadd1300-1e15-11eb-840d-4d84a4f3cdfa.png)

## 3.10 View All Advisors Published ideas

This link allows to see all advisors ideas.

![3 10](https://user-images.githubusercontent.com/38830975/98008005-dc0e4000-1e15-11eb-8ed0-f0e4e6391a86.png)

## 3.11 Individual Jury team page for their communication

As part of jury team this link allow all jury members to communicate with each other also can be called as jury group.

![3 11](https://user-images.githubusercontent.com/38830975/98007074-c77d7800-1e14-11eb-9d6d-637962299b94.png)

## 3.12 Login as Student Interface

Login as Student, student can send request to other students, accept request from other students, see who he have sent request to.

![3 12](https://user-images.githubusercontent.com/38830975/98007077-c8160e80-1e14-11eb-9e1f-3a91204635f9.png)

## 3.13 Student Send and View All Request GROUP CREATING

Here student can send request or view all request

![3 13](https://user-images.githubusercontent.com/38830975/98007081-c8aea500-1e14-11eb-8900-d8b4c5341a4d.png)

## 3.15 Send request to other students

Can send request from student resisted in portal has limitation of 3 students only

![3 15](https://user-images.githubusercontent.com/38830975/98007082-c9473b80-1e14-11eb-9da9-e7e4f478845d.png)

## 3.16 Student Accept Other Student Request

Interface for request of other students that can be accepted or rejected by logged in user

![3 16](https://user-images.githubusercontent.com/38830975/98007085-c9dfd200-1e14-11eb-8521-43228b5ccaa8.png)

## 3.17 Student interface for his sent request to other students

Student interface for he has sent request to other students and that he can cancel

![3 17](https://user-images.githubusercontent.com/38830975/98007090-ca786880-1e14-11eb-8965-739016dffef6.png)

## 3.18 Student view all advisors ideas

Student can view all advisers&#39; ideas

![3 18](https://user-images.githubusercontent.com/38830975/98007092-ca786880-1e14-11eb-9b71-9e8038bb5f33.png)

# CHAPTER 4: Presentation of Data

## 4.1.1 Data

Our data is to design a portal collected from different universities portal and FYP system. Our portal works with university student data which are enrolled in FYP I and FYP II then data goes to the database through a portal and other then that data of other enrolled roles are to be decided by the admin. Portal is designed in such a way that data of different role can only be accessed by the logged-in user with its limitations with a user role

Portal is designed in such a way that data is stored in the database but with each required function data can be seen, accessed or modified easily with restriction of role as every role has its own authentication such as

| year | Credit hour | CGPA |
| --- | --- | --- |
| Last year | Greater then 95 | Greater then 2 |

### 4.1.2 Information integrity

Accuracy, consistency, and reliability of the information of the data substance, procedures and frameworks. There data is secured through database and is only shared with authenticated user as a user account data is only shared on his account or with he whom share

## 4.2 System Features handling data

### 4.2.1 Login and Register

### 4.2.2 Stimulus/Response Sequences

- Admin has authority to create Committee member
- The Committee member will register the jury, advisor and students through Excel file.

Committee members can create jury team

- After authentication the student will login to the system.
- user can change his information from account setting (picture ,name ,password);

**Database Diagram**

![](RackMultipart20201103-4-1cbfiyc_html_8dad4795d83770d7.png)

# CHAPTER 5: Discussions on Findings

## 5.1 Product Perspective

We have done extensive research on our project and we came to know that similar systems have been made for other universities. However, those systems are proprietary and our university does not have such a system. Therefore we are developing an FYP system that we found to be easy method for our university student enrolled in FYP that include functions that can make communication process of different role easy.

## 5.2 Product Functions

• **Login Page**

• **Select Supervisor**

• **Select Group Members**

• **View Grades**

• **Submit Online Activity**

**User Classes and Characteristics**

## 5.3 User Interfaces

**The user interface will be created using Laravel and it will be completely web based. The UI will be simple and easy to use and pretty much self-explanatory****.**

## 5.4 Hardware Interfaces

**The system must have a PHP server and at least 10GB of storage with run time system that can run all the time and to deploy system, only control panel with a domain will be required**

## 5.5 Software Interfaces

**·**** PHP**

**·**** Laravel**

**·**** JavaScript**

**·**** Heroku**

**·**** HTML**

**·**** CSS**

**·**** JQuery**

**·**** Bootstrap**

## 5.6 Communications Interfaces

Notifications will be received through email and then the user can access the app through the browser.

# CHAPTER 6: CONCLUSIONS

As with this final year project process automation system every individual user related to FYP will save time, make more effort on the project, and can work from any place with the internet and a device such as laptops or mobile phones. As this system helps every university student who will come to face FYP1 and FYP2.This system helps users and teachers such as in times of quinine to work from home. No need to meet physically daily. This system plays every part of stakeholder so every stakeholder can work from a device. The main achievement was that we were able to create every different role and student register online, a system to send online mail with account details, creating a jury team and student send and accept requests.

# APPENDIX A: DATA FLOW DIAGRAMS

## A.1 Data Flow Diagram of Outer Round Pipelining Design

### Step by step to carry out the Final Year Project (FYP):

![](RackMultipart20201103-4-1cbfiyc_html_8c2ab6c857746c5b.png)

### A Use-Case diagram describing the final year project process automation system portal

![](RackMultipart20201103-4-1cbfiyc_html_24cdbc13883ad3ff.png)

## A.2 Data Flow Diagram of Inner Round Pipelining Design

### Final year project (FYP) committee:

It contains a Committee head and 4-5 members to monitor and calendar all the exercises identified with FYP. Following are the roles of FYP committee:

- To frame various task advisory groups relying on the academic calendar of the university.
- To provide submitted FYP proposals of students for assessment to extend panels and to gather adjusted/altered propositions from them.
- To gather mid and last assessment results from the task directors **.**

![](RackMultipart20201103-4-1cbfiyc_html_3eeefcc111a67b6a.png)

### Final year project students:

Committee Member upload student sheet who are eligible for FYP on portal which create n number of student account with their name and university email

![](RackMultipart20201103-4-1cbfiyc_html_a40b51efb8adb3a8.png)

#


