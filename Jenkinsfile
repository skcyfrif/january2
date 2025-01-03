pipeline {
    agent any

    environment {
        REGISTRY = "docker.io"
        DOCKER_CREDENTIALS_ID = 'dockerhub-credentials'
    }

    stages {
        stage('Checkout Code') {
            steps {
                script {
                    echo "Cloning repository..."
                    checkout scm
                }
            }
        }

        stage('Build Docker Images') {
            steps {
                script {
                    echo "Building Docker images using Docker Compose..."
                    dir('soumya') {  // Navigate to the 'soumya' directory
                        sh 'docker-compose build'
                    }
                    echo "List Docker images:"
                    sh 'docker images -q'  // List image IDs only
                }
            }
        }

        stage('Push to Docker Hub') {
            steps {
                script {
                    echo "Pushing images to Docker Hub..."
                    docker.withRegistry('https://index.docker.io/v1/', "${DOCKER_CREDENTIALS_ID}") {
                        sh '''
                            docker tag php-app:latest cyfrifprotech/php-app:latest
                            docker push cyfrifprotech/php-app:latest
                        '''
                    }
                }
            }
        }

        stage('Run Docker Containers') {
            steps {
                script {
                    echo "Starting Docker containers..."
                    dir('soumya') {  // Navigate to the 'soumya' directory
                        sh 'docker-compose up -d'
                    }
                }
            }
        }
    }
}
