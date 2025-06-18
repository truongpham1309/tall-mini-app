import { dirname } from 'path';
import { fileURLToPath } from 'url';
import scrape from 'website-scraper';

const __dirname = dirname(fileURLToPath(import.meta.url));

scrape({
  urls: [
    'http://localhost:8000/',
    'http://localhost:8000//mini-app/detail',
    'http://localhost:8000/mini-app/categories'
  ],
  directory: `${__dirname}/my-static-site`,
  recursive: true,
  maxDepth: 2,
  request: {
    headers: {
      'User-Agent': 'Mozilla/5.0'
    }
  }
}).then(() => {
  console.log('✔️ Website has been downloaded successfully!');
}).catch((err) => {
  console.error('❌ Error:', err);
});
