const input = document.getElementById('upload');
  const link = document.getElementById('link');
  let objectURL;

 

    const filer = this.file[0];
    objectURL = URL.createObjectURL(filer);

    link.download = filer.name; 
    link.href = objectURL;
