function[curs]= Databasefind(h)
if exist('cancerdata.sqlite')==2
    delete 'cancerdata.sqlite'
end
h=num2str(h);
dbfile = fullfile(pwd,'cancerdata.sqlite');
conn = sqlite(dbfile,'create');
fullURL = 'https://archive.ics.uci.edu/ml/machine-learning-databases/breast-cancer-wisconsin/breast-cancer-wisconsin.data';
str = urlread(fullURL);
C =(strsplit(str,{'\n',','}))';
C(end)=[];
s=[];
D=(reshape(C,11,[]))';
for i=1:size(D,1)
    for j=1:size(D,2)
        if strcmp(D{i,j},'?')
            s=[s i];
        end
    end
end
D(s,:)=[];
createcancerTable = ['create table cancerTable ' ...
    '(Samplecodenumber NUMERIC, ClumpThickness NUMERIC, ' ...
    'UniformityofCellSize NUMERIC, UniformityofCellShape NUMERIC, MarginalAdhesion NUMERIC, SingleEpithelialCellSize NUMERIC, BareNuclei NUMERIC,' ...
    'BlandChromatin NUMERIC,NormalNucleoli NUMERIC,Mitosis NUMERIC, Class NUMERIC)'];

exec(conn,createcancerTable)
colnames = {'Samplecodenumber','ClumpThickness','UniformityofCellSize','UniformityofCellShape','MarginalAdhesion','SingleEpithelialCellSize','BareNuclei','BlandChromatin','NormalNucleoli','Mitosis','Class'};
for i=1:size(D,1)
data = D(i,:);
data_table = cell2table(data,'VariableNames',colnames);
tablename = 'cancerTable';
insert(conn,tablename,colnames,data_table)
end

statement=['SELECT * FROM cancerTable WHERE Samplecodenumber='];
final = strcat(statement,h);
curs = fetch(conn,final);
curs=cell2mat(curs);
curs=num2str(curs);
close(conn)
end
