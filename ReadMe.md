# Google Firebase Web Push 9.2.0 Simple Project (Without Node.js)
This project is coded by **55utd55**. In this project, it was coded according to the old system of Firebase Cloud Messaging API. No OAuth technology has been added to this project. 
*There is no need to use MySql and Node.js in this project.*

## Setup Video
Youtube: [55utd55](https://www.youtube.com/watch?v=ngLy48498-0)

## Setup Steps

- 1-) Go to Google Firebase Console and create a project.

- 2-) Register the web app from within the project.

- 3-) Name your web application and save it.

- 4-) Click on the settings section of the web application you have registered.

- 5-) Select the config option from the SDK setup and configuration section and copy your config data.

- 6-) Copy the config data you copied to the 5th line in the "firebase-messaging-sw.js" file and the 5th line in the "push.js" file.

- 7-) Go back to your project settings and click on Cloud Messaging and create a Certificate Key from the Web Push Certificates section.

- 8-) Copy the Certificate Key you created and paste it into the vapidkey section on line 12 in the "push.js" file.

- 9-) Go back to the Cloud Messaging section and click "Manage API in Google Cloud Console" from the Cloud Messaging API (Legacy) section.

- 10-) Enable the Cloud Messaging feature on the page that opens.

- 11-) Go back to the Cloud Messaging section and copy the created Server Key.

- 12-) Paste the Server Key you copied into the Authorization Key section on line 23 of the "send-push.php" file.

- 13-) Our installation process with Firebase is completed. In the 12th line of the "index.php" file, give the link to the directory you have added our "push.js" file to. Likewise, open your "push.js" file and give the link to the directory you added your "add-token-to-txt.php" file to on line 16.

- 14-) Upload the files to your site. Remember! The "firebase-messaging-sw.js" file must be in your site's root directory!
