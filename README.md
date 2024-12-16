# Burndown Charts

Burndown Charts is a project developed during an internship to visualize project progress and task completion using interactive burndown charts. The application helps teams track their work against project deadlines, identify bottlenecks, and improve planning for Agile and Scrum workflows. It integrates with Trello to automatically fetch task information and story points, making it easier to manage and update data.

---

## Table of Contents

- [About the Project](#about-the-project)
- [Features](#features)
- [Technologies Used](#technologies-used)
- [Installation](#installation)
- [Usage](#usage)
- [Contributing](#contributing)
- [License](#license)

---

## About the Project

The **Burndown Charts** application provides a clear and dynamic way to visualize progress over time. It allows teams to monitor how much work remains and compare it to the projected timeline. This project was a collaborative effort between interns, focusing on enhancing skills in project management, data visualization, and teamwork.

### Goals:

- Improve transparency in project tracking.
- Provide customizable and interactive charts.
- Enable better decision-making in Agile environments.

---

## Features

- **Dynamic Burndown Charts**: Automatically generated based on the input data.
- **Custom Data Import**: Upload task data in CSV or JSON format.
- **Interactive Visualizations**: Hover over data points to view detailed information.
- **Progress Tracking**: Compare actual progress to ideal timelines.
- **Team Collaboration**: Share charts with team members for better coordination.
- **Role-Based Access**:
  - Scrum Masters can create, edit, and manage sprints and chart data.
  - Team Members can view sprint progress and monitor performance.

---

## Technologies Used

- **Frontend**: React, Chart.js, Bootstrap
- **Backend**: Symfony
- **Testing**: PHPUnit
- **Version Control**: Git, GitHub
- **Other Tools**: Docker (optional for deployment)

---

## Usage

1. **Roles and Permissions**:

   - **Scrum Masters**:
     - Create new sprints.
     - Edit and manage burndown chart data.
     - Update task statuses and sprint information.
   - **Team Members**:
     - View sprint progress.
     - Monitor team performance through the burndown chart.

2. **Add Task Data**:

   - Import data in CSV/JSON format or enter it manually in the app.

3. **View Burndown Chart**:

   - Scrum Masters and Team Members can explore interactive charts showing task progress.

4. **Compare Progress**:

   - Evaluate actual progress versus the ideal progress line.

5. **Share Insights**:

   - Export charts as images or share a link with team members.
