email = open("/mnt/c/Users/NL048740/Google Drive/NCL 2019/PreSeason/LogAnalysis/EmployeeActivity/email.log","r")
emailDict = {}

emailObj = slice(31,-1)
for line in email:
	temp = line[emailObj]
	print(temp)
