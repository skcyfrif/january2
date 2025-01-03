# Use a base image for Node.js
FROM node:16

# Set the working directory
WORKDIR /app

# Copy application files
COPY app/ .

# Install dependencies
RUN npm install

# Expose the port the app runs on
EXPOSE 3000

# Start the application
CMD ["node", "index.js"]
