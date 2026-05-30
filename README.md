# CloudComputing_GroupProject_March2026

# This project is a fruit of successfull teamwork between Syahmi.S and Hashir.M.
# This project uses AWS trial account and everything has been deleted once the owner uploaded this into GitHub.

and the details/configuration of this project are as such:

S3
name: sshm-bucket
File uploaded: index.html, style.css, script.js

Security Group
name: SSHM-SG
Inbound Rules:
HTTP		- TCP	- 80	- anywhere IPV4
HTTPS	- TCP	- 443	- anywhere IPV4
SSH		- TCP	- 22	- anywhere IPV4
Outbound Rules:
default

VPC
name: sshm-vpc
IPV4 CIDR: 10.0.0.0/16
Subnet:
public 1a	- 10.0.0.0/24
public 1b	- 10.0.1.0/24
private 1a	- 10.0.2.0/24
private 1b	- 10.0.3.0/24

EC2
Instance name: SSHM Server
Virtual Machine(VM): Ubuntu
Instance type: t3.micro

Elastic IP
auto generate IPv4:	54.164.204.115
Associate Elastic IP --> SSHM Server

RDS
name: sshm-db
Engine: MySQL Community

Master username: admin
password: sshmdb2026
