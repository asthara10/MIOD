import re

def read_tabular(txt_name):
	"""Genearator. Reads a tabular file and yields a list of tuples with the name of the column and the corresponding value.
	Argument: file.txt name"""
	with open(txt_name) as file:
		line = file.readline().rstrip('\n')
		headers = re.split(r'\t', line)
		for line in file:
			line = line.rstrip('\n')
			values = re.split(r'\t', line)
			to_insert = []
			i = 0
			for name in headers:
				if values[i]:
					to_insert.append((headers[i], values[i]))
					i += 1
				else:
					i += 1
			yield(to_insert)
	file.close()

def insert_data(table_names, file_names):
	"""Prints the SQL commands to insert data into DB tables.
	Arguments: list of table names, list of file names"""
	i = 0
	for file in file_names:
		for to_insert in read_tabular(file):
			print("INSERT INTO %s (" %(table_names[i]), end='')
			first = True
			for tup in to_insert:
				if first:
					print("{}".format(tup[0]), end='')
					first = False
				else:
					print(", {}".format(tup[0]), end='')
			print(")")
			print("VALUES (", end='')
			first = True
			for tup in to_insert:
				if first:
					print("{}".format(tup[1]), end='')
					first = False
				else:
					print(", {}".format(tup[1]), end='')
			print(");")
		i += 1

#Lists of talbe names and file names to run the function
table_names = ["Microindel", "Location", "Gene", "ClinicalSignificance", "Disease", "References", "Microindel_has_References", "Microindel_has_ClinicalSignificance", "Microindel_has_Disease"]
file_names = ["MicroindelNCBI.txt", "LocationNCBI.txt", "GeneNCBI.txt", "ClinSigNCBI.txt", "DiseaseNCBI.txt", "ReferencesNCBI.txt", "MicroIndelRefNCBI.txt", "MicroindelHasSignNCBI.txt", "MicroindelDiseaseNCBI.txt"]

#calling the function
#when executed in the terminal, save the output to a name.sql file. Ex: python3 fromTABLEtoSQL.py > InsertData.sql
insert_data(table_names, file_names)
