# DGL123--final-project

## Summary
I copied and pasted all the required HTML and CSS from the instructor's website https://simpsons.img100.chrisgeelhoed.com/ 

I used isset to keep track of the values of the checkbox. I'd say that isset is the heart of my webapp. I was having an issue while using isset: If I just used the _GET to check the property update, I was getting an error. So instead of storing in a variable I just directly inserted the value in isset parameter.
The other issue I was facing was that the array was showing invalid variable error. In order to tackle that I send the array in createDiv function each time I call it.

I use an array to store the family members' information. My function loops through the arrays to find the correct match and display desired output.

I didn't feel the need to include database interaction and the storage of session cookies, as this was supposed to be a simple reverse enginerring project, and the instructor didn't use any of these in their application.

I used the instructors site's url for images. This could create an issue if the instructor updates his application.

My application is apparent to a user
