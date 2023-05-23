# Attendance and Grade Management System

This project aims to create a web-based platform for attendance submission, grade management, and communication within an educational institution. The system leverages RFID technology, NodeMCU, and a web server to provide a seamless and efficient experience for students and professors.

## Features

- **Attendance Submission**: Students can conveniently submit their attendance using their unique RFID cards. The RFID component reads the card's ID, which is then sent to the server through NodeMCU. Real-time feedback is provided to students via an LCD display.

- **Grade Management**: Professors can input and manage students' grades for each subject. Students can view their grades on their individual pages.

- **Comparison of Attendance Percentages**: Professors have the ability to compare attendance percentages for each subject, allowing them to analyze student attendance patterns and make informed decisions.

- **Export Students' Data into CSV File**: Professor have the ability to download the students' Data into csv file and download it into his device either Mobile phone or on labtop


## Technologies Used

- **RFID**: RFID technology is used to track and identify unique RFID cards assigned to each student. The RFID reader communicates with the cards and retrieves their ID information when scanned.

- **NodeMCU**: NodeMCU serves as an intermediary between the RFID reader and the web server. It establishes a connection with the server using Wi-Fi and transmits the scanned ID data.

- **Web Server**: The web server receives and processes attendance data sent by NodeMCU. It records attendance information in a database, associates it with student names, and provides access to grades and meeting schedules.

- **LCD Display**: An LCD display provides real-time feedback to students, displaying messages such as "Access granted" or "Card scanned previously" based on the success of their scan.

## Installation and Setup

1. Clone the project repository from GitHub.

2. Set up the web server by following the installation instructions provided in the server's README file.

3. Connect the NodeMCU board to the RFID reader and LCD display as per the wiring instructions given in the hardware documentation.

4. Configure the NodeMCU's Wi-Fi settings to connect to the web server.

5. Upload the necessary code to the NodeMCU board, ensuring proper communication between the RFID reader, LCD display, and web server.

6. Launch the website by running the server application and accessing the appropriate URL.

## Future Enhancements

- **Discussion Forum**: Implement a discussion forum for students and professors to engage in academic discussions and seek clarification.

- **Assignment Submission**: Integrate a feature for students to submit assignments online, allowing professors to provide feedback and grades electronically.

- **Progress Tracking**: Develop a tool for students to track their academic progress, including cumulative grades and attendance records.

- **Mobile Application**: Create a mobile application companion for the website, providing convenient access to features and notifications on smartphones and tablets.

## Contributors

- [Ahmed Atef]
- [Muhammed Emadeddine]
- [Kamilia Ahmed]
- [Hesham Khaled]
- [Moaaz Ahmed]
- [Hazem Abdelnaser]
- [Mohamed Salah]

