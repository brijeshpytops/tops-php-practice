import requests
from bs4 import BeautifulSoup

def scrape_google_reviews(place_id):
    url = f"https://www.google.com/maps/place/?q=place_id:{place_id}"
    headers = {
        'User-Agent': 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.3'}
    response = requests.get(url, headers=headers)

    if response.status_code == 200:
        soup = BeautifulSoup(response.content, 'html.parser')
        reviews = soup.find_all('div', class_='ODSEW-ShBeI-content')
        for review in reviews:
            reviewer_name = review.find('div', class_='ODSEW-ShBeI-title').text.strip()
            review_text = review.find('span', class_='ODSEW-ShBeI-text').text.strip()
            rating = review.find('span', class_='ODSEW-ShBeI-H1e3jb').get('aria-label')
            print(f"Reviewer: {reviewer_name}")
            print(f"Rating: {rating}")
            print(f"Review: {review_text}")
            print("----------------------")
    else:
        print("Failed to retrieve reviews.")

# Example usage with the provided Place ID
place_id = "ChIJgXS52x_FXzkRgK7EUNYZS3g"
scrape_google_reviews(place_id)
