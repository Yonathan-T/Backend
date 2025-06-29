import { Command } from 'commander';
import { getAllTasks, createTask, completeTask, deleteTask } from './requests/client.js'; 

const program = new Command();

program
  .command('list')
  .description('List all tasks')
  .action(async () => {
    await getAllTasks();
  }); 

program
  .command('create <title>')
  .description('Create a new task')
  .action(async (title) => {
    await createTask(title);
  });

program
  .command('complete <id>')
  .description('mark a task as completed')
  .action(async (id) => {
    await completeTask(id);
  });

program
  .command('delete <id>')
  .description('Delete the task')
  .action(async (id) => {
    await deleteTask(id);
  });

program.parse(process.argv); 